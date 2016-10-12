<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\series;
use App\seriesVideo;
use App\genres;
use App\videos;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\RegisterForm;
use App\User;

class AdminController extends Controller
{
    use FormBuilderTrait;
   public function create()
    {
        $form = $this->form('App\Forms\SeriesForm', [
            'method' => 'POST',
            'url' => url('\admin\series')
        ]);

        return view('createSeries', ['form' => $form] );
    }


    public function store(Request $request)
    {
        $form = $this->form(\App\Forms\SeriesForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        return \Redirect::to('/success');
        // Do saving and other things...
    }
    public function saveSeries(Request $request){
        $series = new Series;
        $series->seriesName = $request->seriesName;
        $series->seriesDesc = $request->seriesDesc;
        $series->thumbnail = $request->thumbnail;
        $series->save();
        
        $vids= glob("videos/".$request->seriesName."/*.mp4" );
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
        
        return view('admin.sortGenre',$genres);
    }
    public function sortGenre(Request $request){
    }
    public function success(){
        return view('success');
    }
    
}
