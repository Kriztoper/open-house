<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
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
     * Change Password
     *
     * @return view
     */
    public function change_password()
    {
        return view('user.changepassword');
    }

    public function save_password(Request $request)
    {
        Auth::user()->update(['password' => bcrypt($request->password)]);
        return view('user.profile');
    }

    /**
     * Show hall of fame
     *
     * @return view
     */
    public function show_hall_of_fame()
    {
        $userTimes = 'Daniel';
        $posts = DB::select('SELECT studentNumber, first_name FROM gametime, users WHERE users.student_Number = gametime.studentNumber order by totalTime desc limit 32');
        $kdrama = DB::select('SELECT first_name, studentNumber, KDRAMA from videotime, users WHERE users.student_Number = videotime.studentNumber order by KDRAMA desc LIMIT 1');
        $animes = DB::select('SELECT first_name, studentNumber, ANIME from videotime, users WHERE users.student_Number = videotime.studentNumber order by ANIME desc LIMIT 1');
        $mostActives = DB::select('SELECT first_name, ANIME, KDRAMA, totalTime, (ANIME+KDRAMA+totalTime) as total FROM gametime, videotime,users WHERE users.student_Number = videotime.studentNumber and users.student_Number = gametime.studentNumber order by total desc LIMIT 1 ');
        return view('user.hall_of_fame',compact('posts','kdrama','animes','mostActives'));
        // return view('watch_video',['videos'=>$videos]);
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
    public function signin()
    {
        return Redirect::to('/dashboard')->with('error', 405);
    }

    /**
     * add tokens based on code input of the user
     *
     * @return view
     */
    public function saveGameStart($gameId){
        $starter=Carbon::now();
        $starter= new Carbon();
        
        $sNumber=DB::table('users')->where('student_number',Auth::user()->student_number)->pluck('student_number');
        
        $user=DB::table('gametime')->where('studentNumber',$sNumber)->pluck('studentNumber');
        if(empty($user)){
            DB::table('gametime')->insert([
                        ['studentNumber' =>$sNumber , 'startTime' => $starter,'endTime'=>0,'totalTime'=>0],
                        ]);
        }else{
            DB::table('gametime')->where('studentNumber', $sNumber)->update(['startTime'=>$starter]);
        }
        return redirect('/playGame/'.$gameId);
    }
    public function saveGameEnd(){
        $ender=Carbon::now();
        $ender= new Carbon();
        $sNumber=DB::table('users')->where('student_number',Auth::user()->student_number)->pluck('student_number');
        $starter=DB::table('gametime')->where('studentNumber',$sNumber)->pluck('startTime');
        $current=strtotime($ender)-strtotime($starter);
        $total=DB::table('gametime')->where('studentNumber',$sNumber)->pluck('totalTime');
        $total1=$total+$current;
        DB::table('gametime')->where('studentNumber',$sNumber)->update(['endTime'=>$ender,'totalTime'=>$total1]); 
        return redirect('/game');
    }

    public function saveVideoStart($videoPath,$genre){ /*
        $genreId=(int)($genre);
        $starter=(int)(microtime(true));
        $sNumber=DB::table('users')->where('student_number',Auth::user()->student_number)->pluck('student_number');
        $user=DB::table('videotime')->where('studentNumber',$sNumber)->pluck('studentNumber');
        if(empty($user)){
                DB::table('videotime')->insert([
                ['studentNumber' =>$sNumber , 'timeStart' => $starter,'timeOut'=>0,'KDRAMA'=>0,'ANIME'=>0,'genre'=>$genreId],
                ]); 
        }else{
             DB::table('videotime')->where('studentNumber', $sNumber)->update(['timeStart'=>$starter,'genre'=>$genreId]);
        }
        return redirect('/redirect/'.$videoPath); */
    }
    public function videoRedirect($videoPath){
          $videos = DB::table('videos')->where('videoID',$videoPath)->first(); 
           return view('watch_video',['videos'=>$videos]);
        }
    public function saveVideoEnd(){
        $ender=Carbon::now();
        $ender= new Carbon();
        $sNumber=DB::table('users')->where('student_number',Auth::user()->student_number)->pluck('student_number');
        $starter=DB::table('videotime')->where('studentNumber',$sNumber)->pluck('startTime');
        $current=strtotime($ender)-strtotime($starter);
        $genre=DB::table('videotime')->where('studentNumber',$sNumber)->pluck('genre');
        
        if($genre==0){
            $total=DB::table('videotime')->where('studentNumber',$sNumber)->pluck('ANIME');
            $total1=$total+$current;
            DB::table('videotime')->where('studentNumber',$sNumber)->update(['ANIME'=>$total1,'startTime'=>0,'timeOut'=>0]);
        }else if($genre==1){
            $total=DB::table('videotime')->where('studentNumber',$sNumber)->pluck('KDRAMA');
            $total1=$total+$current;
            DB::table('videotime')->where('studentNumber',$sNumber)->update(['KDRAMA'=>$total1,'startTime'=>0,'timeOut'=>0]);
        }
       return redirect('/videos');
    }

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
        }else{
            return Redirect::back()->with('error', 400);
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

    public function save_Profile(Request $request)
    {
        Auth::user()->update($request->all());
        return Redirect::to('/profile');
    }
}

?>
