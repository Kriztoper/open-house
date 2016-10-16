<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Series;
use App\SeriesVideo;
use App\Genre;
use App\SeriesGenre;
use App\Video;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\RegisterForm;
use App\User;
use App\Token;
use App\Game;
use App\GameGenre;
use Input;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    use FormBuilderTrait;
   
    /**
    *
    *   Add series to the database from the form.
    *
    *   @return view addSeries
    */
    public function saveSeries(Request $request){
        //creating new series in series table
        $data = $request->all();
        $data['fthumbnail'] = "".$request->thumbnail." 950";
        $series = Series::create($data);
        //get all series with the said extentions
        $vids= glob("vids/".$request->seriesName."/*.mp4" );
        if(count($vids)<1){
            $vids=glob("vids/".$request->seriesName."/*.flv" );
            if(count($vids)<1){
                $vids=glob("vids/".$request->seriesName."/*.mkv");
            }
        }
        //
        for($i=0;$i<count($vids);$i++){
            $video_data['videoName'] = $series->seriesName." Episode ".($i+1);
            $video_data['videoDesc'] = "Episode ".($i+1)." of the series:".$series->seriesName;
            $video_data['videoURL'] = $vids[$i];
            $video = Video::create($video_data);
            
            $seriesVideo_data['seriesID'] = $series->id;
            $seriesVideo_data['videoID'] = $video->id;
            $series_video = SeriesVideo::create($seriesVideo_data);

        }
        return view('admin.addSeries');
    }
    /**
    *
    *
    *   Create a new Genre for videos
     *   @return view addGenre
    */
    
    public function saveGenre(Request $request){
        $data = $request->all();
        Genre::create($data);

        // $genres = new genre;
        // $genres->genreName = $request->genreName;
        // $genres->genreDesc = $request->genreDesc;
        // $genres->save();

        // $data = ['videos' => $genre->genreName ];
        return view('admin.addGenre',$data);
    }
    /**
    *   Get all genre from the database and sends the view to seriesGenre
    *
     *   @return view sortGenre
    */
    public function getGenre(){
        $genres = DB::table('genres')->get();
        
        return view('admin.sortGenre',['genres' => $genres]);
    }
    /**
    *
    *   Set the genre of a video from the forms
     *   @return view sortGenre
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
    * *   @return view sortGameGenre
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
     *   @return view addGames
    */
    public function addGame(Request $request){
        $game = new game;
        $game->gameName = $request->gameName;
        $game->gameDesc = $request->gameDesc;
        $game->thumbnail = "images/Games/".$request->thumbnail.".png";
        $game->fthumbnail = "images/Featured Games/".$request->fthumbnail.".png";
        $games= glob("games/".$request->gameName."/*.swf" );
        if(count($games)<1){
            $games=glob("games/".$request->gameName."/*.jar" );
            if(count($games)>=1){
                $game->className = $request->className;
                $game->isJar =1;
            }
        }
        else{
            $game->className = "NONE";
            $game->isJar = 0;
        }
        $game->gameURL = $games[0];
        $game->width = $request->width;
        $game->height = $request->height;
        $game->save();
        

        
        return view('admin.addGames');
    }
    /**
    *   Assigns a genre to a game  
    *   @return view addSeries 
    */
    public function getGameGenre(){
        $genres = DB::table('genres')->get();
        
        return view('admin.sortGameGenre',['genres' => $genres]);

    }
    /**
    *   Randomly generate an 8 character code 
    *   @param token_number - number of tokens
    *   @param token_Value - value of the token
    *   @return view addToken
    *
    */
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

    //routes for views
    public function show_dashboard(){
        return view('admin.adminPage');
    }
    public function show_add_series(){
        return view('admin.addSeries');
    }
    public function show_add_genres(){
        return view('admin.addGenre'); 
    }
    public function show_add_games(){
        return view('admin.addGames');
    }
    public function show_add_tokens(){
        return view('admin.addToken');
    }
}
