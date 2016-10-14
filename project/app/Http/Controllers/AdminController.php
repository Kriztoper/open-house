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
use App\token;
use App\game;
use App\gameGenre;
use Input;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    use FormBuilderTrait;
   
    /**
    *
    *   Add series to the database from the form.
    */
    public function saveSeries(Request $request){
        $series = new Series;
        $series->seriesName = $request->seriesName;
        $series->seriesDesc = $request->seriesDesc;
        $series->thumbnail = $request->thumbnail;
        $series->fthumbnail = "".$request->thumbnail." 950";
        $series->save();
        
        $vids= glob("vids/".$request->seriesName."/*.mp4" );
        if(count($vids)<1){
            $vids=glob("vids/".$request->seriesName."/*.flv" );
            if(count($vids)<1){
                $vids=glob("vids/".$request->seriesName."/*.mkv");
            }
        }
        for($i=0;$i<count($vids);$i++){
              $videos = new videos;
            $videos->videoName = $series->seriesName." Episode ".($i+1);
            $videos->videoDesc = "Episode ".($i+1)." of the series:".$series->seriesName;
            $videos->videoURL = $vids[$i];
            $videos->save();
            $seriesVideo[] = array('seriesID'=>$series->seriesID,'videoID' =>$videos->id);   
        }
        if(count($seriesVideo)){
            seriesVideo::insert($seriesVideo);
            DB::table('seriesVideo')->insert($seriesVideo);
        }
        return view('admin.addSeries');
    }
    /**
    *
    *
    *   Create a new Genre for videos
    */
    
    public function saveGenre(Request $request){
        $genres = new genres;
        $genres->genreName = $request->genreName;
        $genres->genreDesc = $request->genreDesc;
        $genres->save();
        $data = ['videos' => $genres->genreName ];
        return view('admin.addGenre',$data);
    }
    /**
    *   Get all genre from the database and sends the view to seriesGenre
    *
    */
    public function getGenre(){
        $genres = DB::table('genres')->get();
        
        return view('admin.sortGenre',['genres' => $genres]);
    }
    /**
    *
    *   Set the genre of a se from the forms
    */
    
    public function sortGenre(Request $request){
        $series = DB::table('series')->where('seriesName', $request->seriesName)->first();
        $genres = DB::table('genres')->get();
        $genresChecked = Input::get('values');
        foreach($genresChecked as $gen){
            $seriesGenre = new seriesGenre;
            $seriesGenre->videoID = $series->seriesID;
            $seriesGenre->genreID = $gen;
            $seriesGenre->save();
        }   
        return view('admin.sortGenre',['genres' => $genres]);
    }
    /**
    *   Add genres to the games from the list of genre(tags)
    *   
    */
    public function sortGameGenre(Request $request){
        $game = DB::table('games')->where('gameName',$request->gameName)->first();
        $genres = DB::table('genres')->get();
        $genresChecked = Input::get('values');
        foreach($genresChecked as $gen){
            $gameGenres = new gameGenre;
            $gameGenres->gameID = $game->gameID;
            $gameGenres->genreID = $gen;
            $gameGenres->save();
        }
        return view('admin.sortGameGenre',['genres'=>$genres]);
    }
    /**
    *   Add Game into database
    *
    */
    public function addGame(Request $request){
        $game = new game;
        $game->gameName = $request->gameName;
        $game->gameDesc = $request->gameDesc;
        $game->thumbnail = $request->thumbnail;
        $game->fthumbnail = "".$request->thumbnail." 950";
        $games= glob("games/".$request->gameName."/*.swf" );
        if(count($games)<1){
            $games=glob("games/".$request->gameName."/*.jar" );
        }
        $game->gameURL = $games[0];
        $game->save();
        

        
        return view('admin.addGames');
    }
    public function getGameGenre(){
        $genres = DB::table('genres')->get();
        
        return view('admin.sortGameGenre',['genres' => $genres]);

    }
    public function generateToken(Request $request){
       $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $randString = '';
	   $arr = array(5,10,15);
	   $charactersLength = strlen($characters);
       $token_number = $request->token_number;
	   for ($ctr=0; $ctr<=$token_number; $ctr++){
		  $randString = '';
		  $index = rand(0,2);
		  $val = $arr[$index];
		  for ($i = 0; $i < 8; $i++) {
			$randString .= $characters[rand(0, $charactersLength - 1)];
		  }
          $data[] = array('tokenName'=>$randString, 'tokenValue'=>$request->token_value,'isActive'=>1);
	   }
       token::insert($data); // Eloquent
       DB::table('tokens')->insert($data); // Query Builder
       return view('admin.addToken');
    }
    public function success(){
        return view('success');
    }
    
    public function show_dashboard(){
        return view('admin.adminPage');
    }
}
