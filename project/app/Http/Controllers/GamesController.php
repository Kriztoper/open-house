<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\RegisterForm;
use ValidatesRequests;
use App\Game;

class GamesController extends Controller
{
    
    public function index()
    {
        //
    }
    public function playGame($id){
        $games = DB::table('games')->where('gameID',$id)->first();
        return view('user.playgame',['game'=>$games]);
    }
    public function buyGame(){
        

    } 

    /**
    * List all games with a set of genre
    *
    */
    public function listGames()
    {

        //$user = Auth::user();
        
        $action = DB::table('games')
                  ->join('gameGenres','gameGenres.gameID','=','games.gameID')
                  ->join('genres','gameGenres.genreID','=','genres.genreID')
                  ->select('games.*')
                  ->where('genres.genreName','Action')
                  ->get();
         $featuredContent = DB::table('games')
                  ->join('gameGenres','gameGenres.gameID','=','games.gameID')
                  ->join('genres','gameGenres.genreID','=','genres.genreID')
                  ->select('games.*')
                  ->where('genres.genreName','Featured Content')
                  ->get();
         $strategy = DB::table('games')
                  ->join('gameGenres','gameGenres.gameID','=','games.gameID')
                  ->join('genres','gameGenres.genreID','=','genres.genreID')
                  ->select('games.*')
                  ->where('genres.genreName','Strategy')
                  ->get();
         $boardGames = DB::table('games')
                  ->join('gameGenres','gameGenres.gameID','=','games.gameID')
                  ->join('genres','gameGenres.genreID','=','genres.genreID')
                  ->select('games.*')
                  ->where('genres.genreName','Board Games')
                  ->get();
        /*$popularSeries = DB::table('series')
                        ->join('seriesVideo','series.seriesID','=','seriesVideo.seriesID')
                        ->join('userVideos','userVideos.videoID','=','seriesVideo.videoID')
                        ->select('series.*')
                        ->get();*/
       
        return view('user.game',['action' => $action,'featured' => $featuredContent,'Strategy' => $strategy,'boardGames' =>  $boardGames]);
    }


}
