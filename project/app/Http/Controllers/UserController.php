<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
     * Show videos
     *
     * @return view
     */
    public function show_videos()
    {
        return view('user.videos');
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
     * Show games list
     *
     * @return view
     */
    public function show_games()
    {
        return view('user.game');
    }
}
