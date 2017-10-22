<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Forum;
use App\Comment;

class ForumController extends Controller
{
    public function showForums() {
        $forums = Forum::select('forums.*')->get();
        $comments = Comment::select('comments.*')->get();
        return view('forum',['forums' => $forums, 'comments' => $comments]);
    }

    public function createNewTopic(Request $request) {
        $author = Auth::user()->first_name.' '.Auth::user()->last_name;
        $forum = new Forum;
        $forum->title = $request->title;
        $forum->author = $author;        
        $forum->save();

        $forums = Forum::select('forums.*')->get();
        $comments = Comment::select('comments.*')->get();
        return view('forum',['forums' => $forums, 'comments' => $comments]);
    }

    public function commentOnForum($id, Request $request) {
        $author = Auth::user()->first_name.' '.Auth::user()->last_name;
        $comment = new Comment;
        $comment->forum_id = $id;
        $comment->content = $request->content;
        $comment->author = $author;
        $comment->save();
        
        $forum = Forum::select('forums.*')->where('id', $id)->get();
        $commentsList = Comment::select('comments.*')->where('forum_id', $id)->get();
        return view('comments', ['forum' => $forum, 'commentsList' => $commentsList]);
    }

    public function showForumComments($id) {
        $forum = Forum::select('forums.*')->where('id', $id)->get();
        $commentsList = Comment::select('comments.*')->where('forum_id', $id)->get();
        return view('comments', ['forum' => $forum, 'commentsList' => $commentsList]);
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
     * Returns a rendered table view in JSON format.
     * 
     * @param  Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax(Request $request)
    {
        $html = view('partials.comments_partial', compact('view'))->render();

        return response()->json(compact('html'));
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
