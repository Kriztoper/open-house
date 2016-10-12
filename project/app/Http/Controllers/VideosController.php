<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\RegisterForm;
use App\User;
use App\series;
use App\seriesVideo;
use App\videos;

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

    /**
     * List all videos and return it to video list.
     *
     * @return \Illuminate\Http\Response
     */
   public function listSeries()
    {

        //$user = Auth::user();
        $series = DB::table('series')->get();
        
        return view('video_list',['series' => $series]);
    }
    public function listVideos($id){
        $seriesVideo = DB::table('seriesVideo')->where('seriesID', $id)->get();
        foreach($seriesVideo as $serVid){
            $serVideo[] = $serVid->videoID;
        }
        $videos = DB::table('video')->whereIn('videoID',$serVideo)->get();
        
        return view('list_video',['videos'=>$videos]);
    }
    public function watchVideos($id){
        $videos = DB::table('video')->where('videoID',$id)->first();
        return view('watch_video',['videos'=>$videos]);
    }

  

}
