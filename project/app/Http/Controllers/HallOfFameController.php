<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class HallOfFameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function maxDrama(){
        $max=DB::table('videotime')
            ->max('KDRAMA');
        $user=DB::table('videotime')
            ->where('KDRAMA',$max)
            ->pluck('studentNumber');
        var_dump($user);
        exit();
    }
    public function maxAnime(){
        $max=DB::table('videotime')
            ->max('ANIME');
        $user=DB::table('videotime')
            ->where('ANIME',$max)
            ->pluck('studentNumber');
        var_dump($user);
        exit();
    }
    public function maxGames(){
         DB::table('gametime')->orderBy('totalTime','DESC')->chunk(10,function($users){
            foreach($users as $user){
                 $sNumber=[$user->studentNumber];
                 var_dump($sNumber);
            }
         });
         exit();
    }  
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
}
