<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\RegisterForm;
use ValidatesRequests;
use App\User;
use App\series;
use App\seriesVideo;
use App\videos;
use App\userVideo;

class VideosController extends Controller
{
    use FormBuilderTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function buyVideo(){
        $userVideos = new userVideo;
    }
    /**
     * List all series from the database with respect to its genre or tag
     *
     */
   public function listSeries()
    {

        //$user = Auth::user();
        
        $anime = DB::table('series')
                  ->join('seriesGenres','seriesGenres.videoID','=','series.seriesID')
                  ->join('genres','seriesGenres.genreID','=','genres.genreID')
                  ->select('series.*')
                  ->where('genres.genreName','Anime')
                  ->get();
         $featuredContent = DB::table('series')
                  ->join('seriesGenres','seriesGenres.videoID','=','series.seriesID')
                  ->join('genres','seriesGenres.genreID','=','genres.genreID')
                  ->select('series.*')
                  ->where('genres.genreName','Featured Content')
                  ->get();
         $kDrama = DB::table('series')
                  ->join('seriesGenres','seriesGenres.videoID','=','series.seriesID')
                  ->join('genres','seriesGenres.genreID','=','genres.genreID')
                  ->select('series.*')
                  ->where('genres.genreName','K-Drama')
                  ->get();
         $mostBought = DB::table('series')
                  ->join('seriesGenres','seriesGenres.videoID','=','series.seriesID')
                  ->join('genres','seriesGenres.genreID','=','genres.genreID')
                  ->select('series.*')
                  ->where('genres.genreName','Most Bought')
                  ->get();
        /*$popularSeries = DB::table('series')
                        ->join('seriesVideo','series.seriesID','=','seriesVideo.seriesID')
                        ->join('userVideos','userVideos.videoID','=','seriesVideo.videoID')
                        ->select('series.*')
                        ->get();*/
       
        return view('user.videos',['anime' => $anime,'featuredContent' => $featuredContent,'kDrama' => $kDrama,'mostBought' =>  $mostBought]);
    }
    /**
    *   List all videos of a series (episodes)
    */
    public function listVideos($id){
        $seriesVideo = DB::table('seriesVideo')->where('seriesID', $id)->get();
        foreach($seriesVideo as $serVid){
            $serVideo[] = $serVid->videoID;
        }
        $videos = DB::table('videos')->whereIn('videoID',$serVideo)->get();
        
        return view('list_video',['videos'=>$videos]);
    }
    /**
    *   Return the video(episode) clicked by the user.
    */
    public function watchVideos($id){
        $videos = DB::table('videos')->where('videoID',$id)->first();
        /*$seriesVideo = DB::table('seriesVideo')->where('seriesID',$id)->get();
          $listOfVideos = DB::table('videos')->whereIn('videosID',$serVideo)->get();*/
        return view('watch_video',['videos'=>$videos]);
    }

  

}
