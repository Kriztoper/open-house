<div id="forum-comments-list">
    <div id="frm-comments-block">
        <h2 id="forum-title-hdr">{{$forum[0]->title}}</h2>
        <ul id="comments">
        @foreach ($commentsList as $index=>$comment)
            <li class="title-card">{{$comment->content}} <span id="author">{{$comment->author}}</span></li>
        @endforeach
        </ul>
    </div>
    <div id="comment-form">
        <form method="post" action="{{url('comments/'.$forum[0]->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <textarea id="comment-area" name="content" placeholder="Enter comment" required></textarea>
            <button id="comment-btn" >Submit</button>
        </form>
    </div>
</div>