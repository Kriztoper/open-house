<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilderTrait;

use App\Forms\RegisterForm;
use ValidatesRequests;
use App\User;
use App\Series;
use App\SeriesVideo;
use App\Video;
use App\UserVideo;
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
      
      $anime = series::join('seriesGenres','seriesGenres.videoID','=','series.seriesID')
                ->join('genres','seriesGenres.genreID','=','genres.genreID')
                ->select('series.*')
                ->where('genres.genreName','Anime')
                ->get();
       $featuredContent = series::join('seriesGenres','seriesGenres.videoID','=','series.seriesID')
                ->join('genres','seriesGenres.genreID','=','genres.genreID')
                ->select('series.*')
                ->where('genres.genreName','Featured Content')
                ->get();
       $kDrama = series::join('seriesGenres','seriesGenres.videoID','=','series.seriesID')
                ->join('genres','seriesGenres.genreID','=','genres.genreID')
                ->select('series.*')
                ->where('genres.genreName','K-Drama')
                ->get();
     
      return view('user.videos',['anime' => $anime,'featuredContent' => $featuredContent,'kDrama' => $kDrama]);
  }
  /**
  *   List all videos of a series (episodes)
  */
   public function listVideos($id){

       $seriesVideo = seriesVideo:: where('seriesID', $id)->get();
       $series = series::where('seriesID',$id)->first();
       $userVideos = UserVideo::where('userID',Auth::user()->student_number)->get();
        $i=0;

        $userVideo[] = array();
       $serVideo = array();

       foreach($seriesVideo as $serVid){
           $serVideo[] = $serVid->videoID;
           $userVideo[$i] = "confirm";
           foreach($userVideos as $useVid){
              if($useVid->videoID == $serVid->videoID)
                  $userVideo[$i]="";
           }
           $i++;
       }
       $videos = video::whereIn('videoID',$serVideo)->get();
       return view('list_vid',['videos'=>$videos, 'series'=>$series , 'userVideo' =>$userVideo]);
  }
  /**
  *   Return the video(episode) clicked by the user.
  */
  public function watchVideos($id){
      $videos = video::where('videoID',$id)->first();
      $genre= DB::table('videosgenres')->where('videoGenreID',$id)->pluck('genreID');
      /*$videos = DB::table('videos')->where('videoID',$id)->first();*/
      return view('watch_video',['videos'=>$videos]);

  /*$seriesID=DB::table('seriesvideo')->where('videoID',$id)->pluck('seriesID');
  $genre= DB::table('seriesGenres')->where('videoID',$seriesID)->pluck('genreID');
  return redirect('/startVideo/'.$id.'/'.$genre);  */
  }
  // routes for views
  public function show_list_vid(){
    return view('list_vid'); 
  }
}
