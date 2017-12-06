<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use App\WebApp;
use App\Category;

class WebAppsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $webapps = WebApp::all();
        $categories = Category::all();

        //return view('user.web_apps')->with('categoryList', $categoryList);
        return view('user.web_apps',['categories'=>$categories,'webapps'=>$webapps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        //dd($categories);  
        return view('user.new_webapp',['categories'=>$categories]);
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $webapp = new WebApp; 
        
        $image = $request->file('image');
        $image->move(public_path(). '/', $image->getClientOriginalName());
        $imageName = $image->getClientOriginalName();
        

        $webapp->pagename = $request->input("web_title");
        $webapp->link = $request->input("web_link");
        $webapp->pagedescription = $request->input("web_desc");
        $categoryID = $request->input("category");
        $webapp->category = DB::table('categories')->where('id',$categoryID)->pluck('category');
        $webapp->imagename = $imageName;
        $webapp->save();

        $data = Category::all();
        return redirect('web_apps')->with('data',$data);
        //
    }

    public function destroyCategory($id) {
        //make webapp that has this category. uncategorized.
        $category = Category::find($id);

        $webapp = DB::table('web_apps')->where('category',$category->category)->get();
        foreach ($webapp as $key) {
            $web = WebApp::find($key->id);
            $web->category = "Uncategorized";
            $web->update();
        }
        $webapp = DB::table('web_apps')->where('category',$category->category)->get();
        $category->delete();

        $data = Category::all();
        return redirect('web_apps')->with('data',$data);
    }
    public function updateCategory(Request $request, $id) {
        //make webapp that has this category. uncategorized.
        $newCategory = $request->input("x");
        $category = Category::find($id);
        $webapp = DB::table('web_apps')->where('category',$category->category)->get();
        foreach ($webapp as $key) {
            $web = WebApp::find($key->id);
            $web->category = $newCategory;
            $web->update();
        }
        $data = Category::all();
        return redirect('web_apps')->with('data',$data);
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
    public function edit(Request $request, $id)
    {
        $id = $request->input("webid");
        $webapp = WebApp::find($id);
        $image = $request->file('image');
        if (empty($request->file('image'))) {} else {
            $image->move(public_path(). '/', $image->getClientOriginalName());
            $webapp->imagename = $image->getClientOriginalName();
        }
        
        $webapp->pagename = $request->input("web_title");
        $webapp->link = $request->input("web_link");
        $webapp->pagedescription = $request->input("web_desc");
        $categoryID = $request->input("category");
        if(empty($categoryID)) {} else {
            $categoryNow = DB::table('categories')->where('id',$categoryID)->pluck('category');
                if($categoryNow==$webapp->category) {} else {
            $webapp->category=$categoryNow;
        }
        }
        
        $webapp->update();

        $data = Category::all();
        return redirect('web_apps')->with('data',$data);
        //
    }
    public function addCategory(Request $request) { 
        $category = $request->input("x");
        $dbCategory = DB::table('categories')->where('category',$category)->pluck('category');
        if(empty($dbCategory)) {
          DB::table('categories')-> insert([['category' => $category],]); 
        } else {
            //category exist already
        }
        $categories = DB::table('categories')->get();
        return view('user.web_apps',['categories'=>$categories]);
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
        dd('hello');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $id = $request->input("webid");
        $webapp = WebApp::find($id);
        $webapp->delete();
        $data = Category::all();
        return redirect('web_apps')->with('data',$data);
    }
    public function showByCategory($id) 
    {
        $category = Category::find($id);
        $webapps = DB::table('web_apps')->where('category',$category->category)->get();
        $categories = Category::all();
        return view('user.web_apps',['categories'=>$categories,'webapps'=>$webapps]);
    }
    public function search(Request $request) 
    {
        return "sdfsd";
    }
}
