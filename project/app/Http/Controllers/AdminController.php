<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\series;
use App\seriesVideo;
use App\genres;
use App\seriesGenre;
use App\videos;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\RegisterForm;
use App\User;
use Input;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    use FormBuilderTrait;
    // Not in use...
   public function create()
    {
        $form = $this->form('App\Forms\SeriesForm', [
            'method' => 'POST',
            'url' => url('\admin\series')
        ]);

        return view('createSeries', ['form' => $form] );
    }
    /**
    *   Save the series from the adminSeries forms 
    */
    public function saveSeries(Request $request){
        $series = new Series;
        $series->seriesName = $request->seriesName;
        $series->seriesDesc = $request->seriesDesc;
        $series->thumbnail = $request->thumbnail;
        $series->save();
        
        $vids= glob("vids/".$request->seriesName."/*.mp4" );
        if(count($vids)<1){
            $vids=glob("vids/".$request->seriesName."/*.flv" );
        }
        for($i=0;$i<count($vids);$i++){
            $videos = new videos;
            $videos->videoName = $series->seriesName." Episode ".($i+1);
            $videos->videoDesc = "Episode ".($i+1)." of the series:".$series->seriesName;
            $videos->videoURL = $vids[$i];
            $videos->save();
            $seriesVideo = new seriesVideo;
            $seriesVideo->seriesID = $series->id;
            $seriesVideo->videoID = $videos->id;
            $seriesVideo->save();
            
        }
        $data = ['videos' => $series->seriesName ];
        
        return view('admin.addSeries', $data);
    }
    /**Create a new Genre for videos
    */
    public function saveGenre(Request $request){
        $genres = new genres;
        $genres->genreName = $request->genreName;
        $genres->genreDesc = $request->genreDesc;
        $genres->save();
        $data = ['videos' => $genres->genreName ];
        return view('admin.addGenre',$data);
    }
    public function getGenre(){
        $genres = DB::table('genres')->get();
        
        return view('admin.sortGenre',['genres' => $genres]);
    }
    /**
    *
    *   Set the genre of a video from the forms
    */
    public function sortGenre(Request $request){
        $series = DB::table('series')->where('seriesName', $request->seriesName)->first();
        $genres = DB::table('genres')->get();
        $genreChecked = Input::get('values');
        foreach($genreChecked as $gen){
            $seriesGenre = new seriesGenre;
            $seriesGenre->videoID = $series->seriesID;
            $seriesGenre->genreID = $gen;
            $seriesGenre->save();
        }
        return view('admin.sortGenre',['genres' => $genres]);
    }
    public function addGame(Request $request){
        //copy series except make it into game set scoreID to null...
    }
    public function gameGenre(){
       // copy genre and edit it for game.
    }
    public function token(){
       //Put bart's code here...
    }
    public function success(){
        return view('success');
    }
    
}
