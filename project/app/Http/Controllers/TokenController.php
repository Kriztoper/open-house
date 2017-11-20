<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Token;
use Illuminate\Support\Facades\Redirect;
//use App\User;

class TokenController extends Controller
{
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * add tokens based on code input of the user
     *
     * @return curretnt page where the request was made
     */
    public function add_token(Request $request)
    {
        // add some logic here for token generation
        // $request->token_code to get the token code input of the user from the modal

        $isActive = DB::table('tokens')
                    ->where('tokenName', $request->token_code)
                    ->pluck('isActive');
        if ($isActive == 1) {

            $tokenValue = DB::table('tokens')->select('tokenValue')->where('tokenName', $request->token_code)->pluck('tokenValue');
            $currentTokens = DB::table('users')->where('student_number', Auth::user()->student_number)->pluck('token');
            $newValue = $currentTokens + $tokenValue;
            DB::table('users')->where('student_number', Auth::user()->student_number)->update(['token'=>(int)$newValue]);
            DB::table('tokens')->where('tokenName', $request->token_code)->update(['isActive'=>0]);

            $tokenValue = DB::table('tokens')
                            ->select('tokenValue')
                            ->where('tokenName', $request->token_code)
                            ->pluck('tokenValue'); 
            $newValue = Auth::user()->token + $tokenValue;
            DB::table('users')
            ->where('student_number', Auth::user()->student_number)
            ->update(['token'=>(int)$newValue]);
            DB::table('tokens')
            ->where('tokenName', $request->token_code)
            ->update(['isActive'=>0]);
        }
        
        return Redirect::back();
    }

    /**
    * 
    * checks whether video is bought otherwise updates token count and mark video as bought
    *
    * @return video view
    *
    */
    public function buy_video($videoID) {
        $isVidBought = DB::table('uservideos')
            ->join('videos', 'videos.videoID', '=', 'uservideos.videoID')
            ->join('users', 'users.student_number', '=', 'uservideos.userID')
            ->where('users.student_number', '=', Auth::user()->student_number)
            ->where('videos.videoID', '=', $videoID)
            ->get();
        
        if (empty($isVidBought)) {
            $newValue = Auth::user()->token - 5;
            if ($newValue >= 0) {
                DB::table('uservideos')
                ->insert(['videoID' => $videoID, 'userID' => Auth::user()->student_number, 'isBought' => 1]);
                DB::table('users')
                ->where('student_number', Auth::user()->student_number)
                ->update(['token'=>$newValue]);
                $path = DB::table('videos')
                    ->where('videoID', $videoID)
                    ->pluck('videoURL');
                return redirect('/watch_video/'.$videoID);
            }
            $series = DB::table('series')
                  ->join ('seriesvideo','seriesvideo.seriesID','=','series.seriesID')
                  ->join ('videos','videos.videoID','=','seriesvideo.videoID')
                  ->first();
            return redirect('/list_video/'.$series->seriesID);   
        }
        $path = DB::table('videos')
                ->where('videoID', $videoID)
                ->pluck('videoURL');
        return redirect('/watch_video/'.$videoID);
    }

    /**
    *
    * updates token count when buying game
    *
    * @return game view
    *
    */
    public function buy_game($gameID) { 
        $isGameBought = DB::table('usergames')
                        ->join('games', 'games.gameID', '=', 'usergames.gameID')
                        ->join('users', 'users.student_number', '=', 'usergames.userID')
                        ->where('users.student_number', '=', Auth::user()->student_number)
                        ->where('games.gameID', '=', $gameID)
                        ->get();
        if (empty($isGameBought)) {
            $newValue = Auth::user()->token - 5;
            if ($newValue >= 0) {
                DB::table('users')
                    ->where('student_number', Auth::user()->student_number)
                    ->update(['token'=>$newValue]);
                DB::table('usergames')
                    ->insert(['userID' => Auth::user()->student_number, 'gameID' => $gameID, 'numOfHours' => 0.0]);
                $gamepath = DB::table('games')
                            ->where('gameID', $gameID)
                            ->pluck('gameURL');
                return redirect('/startGame/'.$gameID); //return to game proper
            }else{
                return Redirect::back()->with('error',401);
                // error 401 for not enough tokens to purchase a game
            }
            return redirect('/game'); //return to game listing
        }
        $gamepath = DB::table('games')
                    ->where('gameID', $gameID)
                    ->pluck('gameURL');
        return redirect('/startGame/'.$gameID); 
    }
}
?>