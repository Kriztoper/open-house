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
     * @return view
     */
    public function add_token(Request $request)
    {
        // add some logic here for token generation
        // $request->token_code to get the token code input of the user from the modal

        $isActive = DB::table('tokens')->where('tokenName', $request->token_code)->pluck('isActive');
        if ($isActive == 1) {
            $tokenValue = DB::table('tokens')->select('tokenValue')->where('tokenName', $request->token_code)->pluck('tokenValue');
            $currentTokens = DB::table('users')->where('student_number', Auth::user()->student_number)->pluck('token');
            $newValue = $currentTokens + $tokenValue;
            DB::table('users')->where('student_number', Auth::user()->student_number)->update(['token'=>(int)$newValue]);
            DB::table('tokens')->where('tokenName', $request->token_code)->update(['isActive'=>0]);

        }
        
        return redirect('/dashboard');
    }
}