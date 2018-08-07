<!DOCTYPE html>
<html>
    <head>
        <title>Forum</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css/forum.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    </head>
  <body>

  <div class="container">
    <nav id="top-navbar" class="navbar navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img src="http://i.imgur.com/js8s2AR.png?2" alt="OpenHouse">
            </a>
          </div>
          <ul id="tokens" class="nav navbar-nav">
                  <li>
                    <p class="navbar-text"><span class="glyphicon glyphicon-record gold"></span><span class="redfont"> x </span><span class="white">{{Auth::user()->token}}</span></p>
                  </li>
              </ul>
          <ul id="links" class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{ url('/dashboard') }}">DASHBOARD</a></li>
              <li><a href="{{ url('/forum') }}">FORUM</a></li>  
              <li><a href="{{ url('/hall_of_fame') }}">HALL OF FAME</a></li>
              <li><a href="{{ url('/game') }}">GAMES</a></li>
              <li><a href="{{ url('/videos') }}">VIDEOS</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button"> {{ strtoupper(Auth::user()->first_name) }}
                <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-right col-xs-12">
                    <li><a href="{{url('/profile')}}">PROFILE</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">ADD TOKENS</a></li>
                    <li><a href="{{url('/logout')}}">LOGOUT</a></li>
                </ul>
              </li>
          </ul>
        </div>
    </nav>

    <!-- Modal for token -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <img id="modal-logo" src="http://i.imgur.com/i4LQ5Bi.png" />
            <img src="http://i.imgur.com/2ggNleD.jpg" />
            <h4 class="modal-title"><strong>KOMSAI OPENHOUSE TOKEN GENERATOR</strong></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/tokens') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <center><h6 id="error_message" hidden color="white"> Token code is not valid. Please purchase it at the administrator and 
                try again!! </h6></center>
            <input type="text" class="form-control" name="token_code" placeholder="Enter token code here...">
            <center><button type="submit" class="btn btn-primary" id="modal-button">Get Tokens!!</button></center>
            </form>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-fixed-bottom">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right navbar-xs">
          <li><a href="{{url('/developers')}}">ABOUT THE DEVELOPERS</a></li>
        </ul>
      </div>
    </nav>
    
  </div>

  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif


  <div id="app">
    <div class="container" id="forums-cntnr">
      <div id="search">
        {{--  <div id="utility-cntnr">  --}}
        <span id="utility-cntnr">
          <div id="sortby-cntnr">
            <label>Sort By</label>
            <sortby-select inline-template>
              <select v-model="value">
                <option v-on: v-for="sortByValue in sortByValues" v-bind:value="sortByValue">@{{ sortByValue.text }}</option>
                @{{ sort }}
              </select>
            </sortby-select>
          </div>
          <div id="search-cntnr">
            <input id="search-field" type="text" placeholder="search keyword here" v-model="keyword">
          </div>
        </span>
        {{--  </div>  --}}
      </div>
      <div id="title-tag-form">
        <form id="forum-tag-form" method="post" action="{{url('forum')}}">
          <div id="forum-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" id="forum-area" name="title" placeholder="Enter topic title" required>
            <input type="hidden" name="forumColor" id="forum-color-input" value="" />
            <button
              id="forum-color" onchange="setForumColor()"
              class="jscolor {valueElement:null,value:'{!! $color !!}'}">
              Pick a color
            </button>
            <input id="tag-form-input" list="selections" name="selection" placeholder="Enter tag here" required>
            <datalist id="selections">
              <dynamic-option v-for="forumTag in distinctForumTags" :tag="forumTag" :key="forumTag.id"></dynamic-option>
            </datalist>
            <button id="forum-btn" >Submit</button>
          </div>
        </form>
      </div>
      <div id="forum-titles-list">
        @if(!$pinnedForum->isEmpty())
          <div id="pinned-forum-cntnr">
            <p id="pinned-post-lbl">Pinned Post <span class="glyphicon">&#xe146;</span></p>
              <div id="pinned-card-partition" v-bind:style="'border-left: 10px solid ' + pinnedForum[0].color + ';'">
                <a class="titles-link" v-bind:href="'comments/' + pinnedForum[0].id">
                  <div id="inner-pinned-card-partition" class="card-partition">
                    <div class="forum-title">
                      @{{ pinnedForum[0].title }}
                    </div>
                    <div class="forum-desc">
                      <span class="num-comments">@{{ pinnedForum[0].num_comments }}</span>
                      <span class="date-updated">@{{ pinnedForum[0].updated_at }}</span>
                      <span class="tag">{{ $pinnedForumTag }}</span>
                      <span class="author">@{{ pinnedForum[0].author }}</span>
                    </div>
                  </div>
                </a>
                <form id="delete-pin-form" method="post" action="{{url('forum/pin/delete/'.$pinnedForum[0]->id)}}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button id="delete-pin-btn">X</button>
                </form>
              </div>  
          </div>
        @endif
        <ul id="titles">
            <div id="forum-list-headers" class="card-partition" style="background-color: #fff;">  
              <div class="forum-title">
                Forum Title
              </div> 
              <div id="forum-list-headers-forum-desc">
                <span class="num-comments-lbl">Comments</span>
                <span class="author-lbl">Author</span>
                <span class="tag-lbl">Tag</span>
                <span class="date-updated-lbl">Date Updated</span>
              </div>
            </div>
            <li v-bind:style="'border-left: 10px solid ' + forum.color + ';'" class="title-card" v-for="forum in filteredList">
              <a class="titles-link" v-bind:href="'comments/' + forum.id">
                <div class="card-partition">  
                  <div class="forum-title">
                    @{{ forum.title }}
                  </div> 
                  <div class="forum-desc">
                    <span class="num-comments">@{{ forum.num_comments }}</span>
                    <span class="date-updated">@{{ forum.updated_at }}</span>
                    <span class="tag">@{{ forum.tag }}</span>
                    <span class="author">@{{ forum.author }}</span>
                  </div>
                </div>  
              </a>
            </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- Modal for error in videos -->
  <div id="errorModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <img id="modal-logo" src="http://i.imgur.com/i4LQ5Bi.png" />
          <img src="http://i.imgur.com/2ggNleD.jpg" />
          <h4 class="modal-title"><strong>KOMSAI OPENHOUSE ERROR 404!</strong></h4>
        </div>
        <div class="modal-body">
                <center><h4 id="error_message"> Feature is still under development. Sorry for the inconvenience. </h4></center>
        </div>
      </div>
    </div>
  </div>
  
   <script>
      jQuery(document).ready(function($) {
        $(window).scroll(function() {
          var scrollPos = $(window).scrollTop(),
            navbar = $('.navbar-fixed-top');

          if (scrollPos > 20) {
              navbar.addClass('change-color');
          } else {
            navbar.removeClass('change-color');
          }
        });
    });

      $('[id^="myCarousel"]').carousel();
    </script>      
    <?php $error = Session::get('error'); ?>
  @if($error != null && count($error)>0 && Session::get('error') == 400)
  <script>
  $(function()
    {
      $('#myModal').modal({show:true});
      $('h6').show();
  });
  </script>
  @endif


  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script>
    Vue.component('dynamic-option', {
        props: ['tag'],
        template: "<option name='forumTagOption' :value='tag'></option>"
    })

    sortby = Vue.component('sortby-select', {
      data: function() {
        return {
          value: {},
        }
      },
      computed: {
        sort: function() {
          if (this.value.text === "None") {
            vm.forums.sort(function(forum1, forum2) {
              return forum1.id - forum2.id;
            });
          } else if (this.value.text === "Title: ascending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum1.title.localeCompare(forum2.title);
            });
          } else if (this.value.text === "Title: descending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum2.title.localeCompare(forum1.title);
            });
          } else if (this.value.text === "Author: ascending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum1.author.localeCompare(forum2.author);
            });
          } else if (this.value.text === "Author: descending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum2.author.localeCompare(forum1.author);
            });
          } else if (this.value.text === "Tag: ascending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum1.tag.localeCompare(forum2.tag);
            });
          } else if (this.value.text === "Tag: descending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum2.tag.localeCompare(forum1.tag);
            });
          } else if (this.value.text === "Creation Date: ascending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum1.created_at.localeCompare(forum2.created_at);
            });
            } else if (this.value.text === "Creation Date: descending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum2.created_at.localeCompare(forum1.created_at);
            });
          }  else if (this.value.text === "Last Activity: ascending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum1.updated_at.localeCompare(forum2.updated_at);
            });
            } else if (this.value.text === "Last Activity: descending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum2.updated_at.localeCompare(forum1.updated_at);
            });
          } else if (this.value.text === "Hot Topics: ascending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum1.num_comments - forum2.num_comments;
            });
          } else if (this.value.text === "Hot Topics: descending") {
            vm.forums.sort(function(forum1, forum2) {
              return forum2.num_comments - forum1.num_comments;
            });
          }
        }
      }
    });

    var vm = new Vue({
      el: "#app",
      data: {
        keyword: "",
        forums: {!! json_encode($forums) !!},
        pinnedForum: {!! json_encode($pinnedForum) !!},        
        distinctForumTags: {!! json_encode($distinctForumTags) !!},
        sortByValues: [
          { 
            text: "None",
          }, 
          {
            text: "Title: ascending",
          },
          {
            text: "Title: descending",
          },
          {
            text: "Author: ascending",
          },
          {
            text: "Author: descending",
          }, 
          {
            text: "Tag: ascending",
          },
          {
            text: "Tag: descending",
          },
          {
            text: "Creation Date: ascending",
          },
          {
            text: "Creation Date: descending",
          },
          {
            text: "Last Activity: ascending",
          },
          {
            text: "Last Activity: descending",
          },
          {
            text: "Hot Topics: ascending",
          },
          {
            text: "Hot Topics: descending",
          },
        ],
      },
      methods: {
        /*  methods: {
          updateStuff: function () {
            this.$http.get('/forum').then((response) => {
              console.log(response.data.data);
              this.stuff = response.data.data;
            }, (response) => {
              console.log('ERROR');
              console.log(response);
            });
            setTimeout(this.updateStuff, 5000);
          }
        },
        ready() {
          this.updateStuff();
        }  */
      },
      computed: {
        filteredList: function() {
          return this.forums.filter((forum) => {
            return forum.title.toLowerCase().includes(this.keyword.toLowerCase()) ||
              forum.num_comments.toString().includes(this.keyword) || 
              forum.author.toLowerCase().includes(this.keyword.toLowerCase()) || 
              forum.tag.toLowerCase().includes(this.keyword.toLowerCase()) ||
              forum.updated_at.toLowerCase().includes(this.keyword.toLowerCase());
          });
        },
      }
    });
  </script>

  <script src="js/jscolor.js"></script>
  <script>
    //Function to convert rgb color to a hex format
    function rgb2hex(orig){
      var rgb = orig.replace(/\s/g,'').match(/^rgba?\((\d+),(\d+),(\d+)/i);
      return (rgb && rgb.length === 4) ? "#" +
        ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
        ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
        ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : orig;
    }

    $('#forum-btn').click(function() {
      var hex = rgb2hex( document.querySelector("#forum-color").style.backgroundColor );      
      var clr = document.getElementById('forum-color-input').value = hex;
    });
   
    // forums autoupdate
    setInterval(function() {
      $.ajax({
        url: "/api/forum",
      }).done(function( data ) {
        if (vm.forums.length !== data.forums.length) {
          vm.forums = data.forums;
        }
      });
    }, 10000);
  </script>
  </body>


</html>