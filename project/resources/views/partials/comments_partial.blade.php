<div id="app">
    <div id="frm-comments-block">
        <div id="forum-title-hdr-cntnr-color" style="background: {!! $forum[0]->color !!}"></div>
        <div id="forum-title-hdr-cntnr">
            <h2 id="forum-title-hdr">{{ $forum[0]->title }}</h2>
            <div id="pin">
                <form id="pin-form" method="post" action="{{url('forum/pin/'.$forum[0]->id)}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button><span class="glyphicon">&#xe146;</span> Pin</button>
                </form>
            </div>
            <span id="forum-author">{{ $forum[0]->author }}</span>      
            <span id="tag">{{ $forumTag }}</span>
            <span id="date-created">{{ $forum[0]->created_at }}</span>
        </div>

        <ul id="comments">
            <li v-for="comment in computedComments" class="title-card">
                <div class="card-partition">
                    <div class="comment-content">
                        @{{ comment.content }}
                    </div>
                    <div class="comment-desc">
                        <span id="comment-date-created">@{{ comment.created_at }}</span>
                        <span id="author">@{{ comment.author }}</span>
                    </div>
                </div>
            </li>
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