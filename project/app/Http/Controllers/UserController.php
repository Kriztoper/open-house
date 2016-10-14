<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
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
     * Show dashboard
     *
     * @return view
     */
    public function show_dashboard()
    {
        return view('user.dashboard');
    }

    /**
     * Show profile
     *
     * @return view
     */
    public function show_profile()
    {
        return view('user.profile');
    }

    /**
     * Show hall of fame
     *
     * @return view
     */
    public function show_hall_of_fame()
    {
        return view('user.hall_of_fame');
    }

    /**
     * Show games
     *
     * @return view
     */
    public function show_games()
    {
        return view('user.game');
    }

    /**
     * Show developers
     *
     * @return view
     */
    public function show_developers()
    {
        return view('user.developers');
    }

    /**
     * Show videos
     *
     * @return view
     */
    public function show_videos()
    {
        return view('user.videos');
    }

    /**
     * add tokens based on code input of the user
     *
     * @return dashboard view
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
        
        return redirect('/dashboard');
    }

    /**
    * 
    * checks whether video is bought otherwise updates token count and mark video as bought
    *
    * @return video view
    *
    */
    public function buy_video(Request $request) {
        $isVidBought = DB::table('uservideos')
        ->join('videos', 'videos.videoID', '=', 'uservideos.videoID')
        ->join('users', 'users.user_ID', '=', 'uservideos.userID')
        ->where('users.user_ID', '=', Auth::user()->student_number)
        ->where('videos.videoID', '=', $request->videoID)
        ->get();

        if (empty($isVidBought)) {
            DB::table('uservideos')
            ->insert(['videoID' => $request->videoID, 'userID' => Auth::user()->student_number, 'isBought' => 1]);
            $newValue = Auth::user()->token - 5;
            DB::table('users')
            ->where('student_number', Auth::user()->student_number)
            ->update(['token'=>$newValue]);
            var_dump($newValue);
            exit();
        } 
    }

    /**
    *
    * checks whether game is bought otherwise updates token count and mark game as bought
    *
    * @return game view
    *
    */
    public function buy_game(Request $request) {
        $isGameBought = DB::table('usergames')
        ->join('users', 'users.user_ID', '=', 'usergames.userID')
        ->join('games', 'games.gameID', '=', 'usergames.gameID')
        ->where('users.user_ID', '=', Auth::user()->student_number)
        ->where('games.gameID', '=', $request->gameID)
        ->get();

        if(empty($isGameBought)) {
            DB::table('usergames')
            ->insert(['gameID' => $request->gameID, 'userID' => Auth::user()->student_number, 'isBought' => 1]);
            $newValue = Auth::user()->token - 5;
            DB::table('users')
            ->where('student_number', Auth::user()->student_number)
            ->update(['token'=>$newValue]);
            var_dump($newValue);
            exit();
        }
    }
}