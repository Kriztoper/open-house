<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\token;
use App\User;

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

    public function getTokenValue($tokenName) {
        /**
        * pseudocode
        * $result = select isActive from tokens where tokenName = $tokenName;
        * $isActive = $result[0];
        * if ($isActive) {
        *   $tokenValueArr = select tokenValue from tokens where tokenName = $tokenName;
        *   $tokenValue = 0;
        *   foreach ($tokenValue as $val) {
        *       $tokenValue = $val;
        *   }
        *   update users set token = token + $tokenValue where student_number =
        *       user.$student_number;
        *   update tokens set isActive = 0 where tokenName = $tokenName;
        * }
        * return view;
        *
        **/

       // $isActiveRS = token::where([['isActive', 1], ['tokenName', $tokenName]])->get();
       // if (!empty($isActiveRS)) {
            $tokenValueRS = DB::table('tokens')->select(DB::raw('tokenValue')->where('tokenName', $tokenName)->get());
            $tokenValue = $tokenValueRS[0];
            DB::table('users')->where('student_number', user::student_number)->update(['token'=>'token'+$tokenValue]);
            DB::table('tokens')->where('tokenName', $tokenName)->update(['isActive'=>0]);
       // }
        return view('user.dashboard');

        //$temp = token::where('tokenValue', $tokenName)->get(); 
        //$tokenVal = 0;
        //foreach ($temp as $key) {  
            //$tokenVal = $key;
        //}
        //User::where('student_number', 201362775)->update(['token'=>$tokenVal]);
        //token::where('tokenName', $tokenName)->update(['isActive'=>1]);
        //DB::update('update users set token = token + $toReturn where student_number=$sn');
        //return view('user.dashboard');
    }
}
