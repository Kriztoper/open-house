<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Forum;
use App\PinnedForum;
use App\Comment;
use App\ForumTag;

class ForumController extends Controller
{
    public function pinForum($forum_id) {
        $user_id = Auth::user()->id;
        
        // get pinned forum if user already has an existing pinned forum
        $pinnedForum = PinnedForum::select('pinned_forums.*')->where('user_id', $user_id)->get();

        if (!$pinnedForum->isEmpty()) { // user has existing pinned forum
            $pinnedForum[0]->forum_id = $forum_id;
            $pinnedForum[0]->save();
        } else { // user has no existing pinned forum
            $pinnedForum = new PinnedForum;
            $pinnedForum->user_id = $user_id;
            $pinnedForum->forum_id = $forum_id;
            $pinnedForum->save();
        }

        return redirect()->action('ForumController@showForums');
    }

    public function deletePinnedForum($forum_id) {
        $user_id = Auth::user()->id;
        
        // get pinned forum if user already has an existing pinned forum
        $pinnedForum = PinnedForum::select('pinned_forums.*')->where('user_id', $user_id)->get();

        if (!$pinnedForum->isEmpty()) { // user has existing pinned forum
            $pinnedForum[0]->forum_id = null;
            $pinnedForum[0]->save();
        }

        return redirect()->action('ForumController@showForums');
    }

    public function api_showForums() {
        // get pinned forum
        $user_id = Auth::user()->id;
        $forum_id = PinnedForum::select('pinned_forums.*')->where('user_id', $user_id)->pluck('forum_id');
        $pinnedForum = Forum::select('forums.*')->where('id', $forum_id)->get();

        // get pinned forum's tag
        $pinnedForumTag = "";
        if (!$pinnedForum->isEmpty()) {
            $pinnedForumTag = ForumTag::select('forum_tags.tag')->where('id', $pinnedForum[0]->tag_id)->pluck('tag');
        }

        $forums = Forum::select('forums.*')->get();
        $comments = Comment::select('comments.*')->get();
        $distinctForumTags = [];
        foreach($forums as $forum) {
            $forum['tag'] = ForumTag::select('forum_tags.tag')->where('id', $forum->tag_id)->pluck('tag');
            if (!in_array($forum['tag'], $distinctForumTags)) {
                array_push($distinctForumTags, $forum['tag']);
            }
        }

        // randomize color
        $colorsHexIndex = "0123456789abcdef";
        $color = "#";
        for ($i = 0; $i < 6; $i++) {
            $color .= $colorsHexIndex[rand(0, 15)];
        }

        return ['forums' => $forums, 'distinctForumTags' => $distinctForumTags, 'color' => $color, 'pinnedForum' => $pinnedForum, 'pinnedForumTag' => $pinnedForumTag];
    }

    public function showForums() {
        // get pinned forum
        $user_id = Auth::user()->id;
        $forum_id = PinnedForum::select('pinned_forums.*')->where('user_id', $user_id)->pluck('forum_id');
        $pinnedForum = Forum::select('forums.*')->where('id', $forum_id)->get();

        // get pinned forum's tag
        $pinnedForumTag = "";
        if (!$pinnedForum->isEmpty()) {
            $pinnedForumTag = ForumTag::select('forum_tags.tag')->where('id', $pinnedForum[0]->tag_id)->pluck('tag');
        }

        $forums = Forum::select('forums.*')->get();
        $comments = Comment::select('comments.*')->get();
        $distinctForumTags = [];
        foreach($forums as $forum) {
            $forum['tag'] = ForumTag::select('forum_tags.tag')->where('id', $forum->tag_id)->pluck('tag');
            if (!in_array($forum['tag'], $distinctForumTags)) {
                array_push($distinctForumTags, $forum['tag']);
            }
        }

        // randomize color
        $colorsHexIndex = "0123456789abcdef";
        $color = "#";
        for ($i = 0; $i < 6; $i++) {
            $color .= $colorsHexIndex[rand(0, 15)];
        }

        return view('forum',['forums' => $forums, 'distinctForumTags' => $distinctForumTags, 'color' => $color, 'pinnedForum' => $pinnedForum, 'pinnedForumTag' => $pinnedForumTag]);
    }

    public function createNewTopic(Request $request) {
        $author = Auth::user()->first_name.' '.Auth::user()->last_name;
        $forum = new Forum;
        $forum->title = $request->title;
        $forum->author = $author;        
        $forum->tag_id = ForumTag::select('forum_tags.id')->where('tag', $_POST['selection'])->pluck('id');
        $forum->color = $request->forumColor;

        // if tag does not exist create tag in forums_tag table
        if ($forum->tag_id == null) {
            $forumTag = new ForumTag;
            $forumTag->tag = $_POST['selection'];
            $forumTag->save();

            $forum->tag_id = ForumTag::select('forum_tags.id')->where('tag', $_POST['selection'])->pluck('id');
        }

        $forum->save();

        return $this->showForums();
    }

    public function commentOnForum($id, Request $request) {
        $author = Auth::user()->first_name.' '.Auth::user()->last_name;
        $comment = new Comment;
        $comment->forum_id = $id;
        $comment->content = $request->content;
        $comment->author = $author;
        $comment->save();

        $forum = Forum::select('forums.*')->where('id', $id)->get()->first();
        $forum->num_comments = $forum->num_comments + 1;
        $forum->save();

        return $this->showForumComments($id);
    }

    public function showForumComments($id) {
        $forum = Forum::select('forums.*')->where('id', $id)->get();
        $commentsList = Comment::select('comments.*')->where('forum_id', $id)->get();
        $forumTag = ForumTag::select('forum_tags.tag')->where('id', $forum[0]->tag_id)->pluck('tag');
        return view('comments', ['forum' => $forum, 'commentsList' => $commentsList, 'forumTag' => $forumTag]);
    }

    public function api_showForumComments($id) {
        $forum = Forum::select('forums.*')->where('id', $id)->get();
        $commentsList = Comment::select('comments.*')->where('forum_id', $id)->get();
        $forumTag = ForumTag::select('forum_tags.tag')->where('id', $forum[0]->tag_id)->pluck('tag');
        return ['forum' => $forum, 'commentsList' => $commentsList, 'forumTag' => $forumTag];
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
