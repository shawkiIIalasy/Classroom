@extends('layouts.app')

@section('content')
<br>

    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>

    @if($post->cover_image!='noimage.png')<img style="width:800px;height: 400px;" src="/storage/cover_image/{{$post->cover_image}}">@endif
    <br><br>
    <div class="well">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}

            <a href="/posts/{{$post->id}}/edit" class="btn btn-default pull-right">Edit</a>


        @endif
             <div class="card">
                <div class="card_block">
                    <form method="POST" action="/posts/{{$post->id}}/like">
                      {{ csrf_field() }}
                      {{ method_field('POST') }}
                        <div class="form-group">
                           <div class="rating" id="rating">
            <button class="btn btn-default  glyphicon glyphicon-thumbs-up">Like 

               <span class="badge">{{count($post->like)}}</span>  
                 </button>
            
      <button href="#{{$post->id}}" data-toggle="collapse" class="btn btn-default  glyphicon glyphicon-comment">Comment
              <span class="badge">{{count($post->comment)}}</span></button>
            
           
         
        </div></div>
                    </form>

                    </div>
            </div> 
            <div id="{{$post->id}}" class="collapse">
         <h3>Comments</h3>
            <div class="Comment" id="comment-box">
                
                @foreach ($post->comment as $comment)
               <div class="user-comment-box">
                    <div class="well"> 
                    {{$comment->body}}
                    <div class="pull-right">
                    <small>Comment from<a href="#" style="margin-right: 0px;" >{{$comment->user->name}}</a>@if(Auth::user()->id == $comment->user_id) ||  <a href="/posts/{{$comment->id}}/deletecomment" style="color: #1abc9c " name="submit" type="submit" > Edit</a> || 
                    <a href="/posts/{{$comment->id}}/deletecomment" style="color: #bf5329 " name="submit" type="submit" >Delete</a>
                @endif</small>
                 </div></div>
                <hr></div>
                
                @endforeach
            @if(count($post->comment)>0)<a class="see-more">See more Comment..</a>@endif</div>
       
            <hr>
             <div class="card">
                <div class="card_block">
                    <form method="POST" action="/posts/{{$post->id}}/comment">
                      {{ csrf_field() }}
                     

                        <div class="form-group">
                            <textarea name="body" placeholder="Add Comment Here" class="form-control"></textarea>


                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Add Comment 
                            </button>

                        </div>

                    </form>
                    </div>
            </div> 
      </div>
    @endif
@endsection
@section('script')
<script type="text/javascript">
    function myFunction(x) {
    x.classList.toggle("fa-thumbs-down");
}
</script>
<script type="text/javascript">
    $(function(){
       // select the first 5 hidden divs

    $( ".Comment" ).each(function( index ) {
 $(this).children(".user-comment-box").slice(-3).show();
});

        $(".see-more").click(function(e){ // click event for load more
            e.preventDefault();
            var done = $('<div class="see-more=done">done</div>');
            $(this).siblings(".user-comment-box:hidden").slice(-5).show(); // select next 5 hidden divs and show them
            if($(this).siblings(".user-comment-box:hidden").length == 0){ // check if any hidden divs
                $(this).replaceWith(done); // if there are none left
            }
        });
});
</script>
<script >
(function ($) {

    var likeBtn = 'like',
        dislikeBtn = 'dislike';

    var defaults = {
        click: null,
        beforeClick: null,
        initialValue: 0,
        reverseMode: true,
        readOnly: false,
        likeBtnClass: 'like',
        dislikeBtnClass: 'dislike',
        activeClass: 'active',
        disabledClass: 'disabled'
    };

    function LikeDislike(element, options) {
        this.element = element;
        this.opts = $.extend({}, defaults, options);
        this.init();
    }

    LikeDislike.prototype = {
        init: function () {
            this.btns = $(this.element).find('.' + this.opts.likeBtnClass + ', .' + this.opts.dislikeBtnClass);
            this.readOnly(this.opts.readOnly);
            if (this.opts.initialValue !== 0) {
                var activeBtn = this.opts.initialValue === 1 ? likeBtn : dislikeBtn;
                this.btnDown(activeBtn);
            }
            return this;
        },
        readOnly: function (state) {
            var btns = this.btns;
            if (!state) {
                if (!this.opts.reverseMode) {
                    var notActiveBtns = btns.not('.' + this.opts.activeClass);
                    if (notActiveBtns.length) {
                        btns = notActiveBtns;
                    }
                }
                this.enable(btns);
            } else {
                this.disable(btns);
            }
        },
        getBtn: function (btnType) {
            if (btnType === likeBtn) {
                return $(this.element).find('.' + this.opts.likeBtnClass);
            } else if (btnType === dislikeBtn) {
                return $(this.element).find('.' + this.opts.dislikeBtnClass);
            } else {
                $.error('Wrong btnType: ' + btnType);
            }
        },
        btnDown: function (btnType) {
            var btn = this.getBtn(btnType);
            btn.addClass(this.opts.activeClass);
            if (!this.opts.reverseMode) {
                this.disable(btn);
            }
        },
        btnUp: function (btnType) {
            var btn = this.getBtn(btnType);
            btn.removeClass(this.opts.activeClass);
            if (!this.opts.reverseMode) {
                this.enable(btn);
            }
        },
        enable: function (btn) {
            var self = this;
            var opts = self.opts;

            btn.removeClass(opts.disabledClass);

            if (opts.beforeClick) {
                btn.on('beforeClick', function (event) {
                    return opts.beforeClick.call(self, event);
                });
            }

            btn.on('click', function (event) {
                var btn = $(this);

                if (opts.beforeClick && !btn.triggerHandler('beforeClick')) {
                    return false;
                }

                var btnType = btn.hasClass(opts.likeBtnClass) ? likeBtn : dislikeBtn;
                var hasActive = self.btns.hasClass(opts.activeClass);
                var isActive = btn.hasClass(opts.activeClass);

                var value = 0, l = 0, d = 0;

                if (btnType === likeBtn) {
                    if (isActive) {
                        self.btnUp(likeBtn);
                        l = -1;
                    } else {
                        if (hasActive) {
                            self.btnUp(dislikeBtn);
                            d = -1;
                        }
                        self.btnDown(likeBtn);
                        l = 1;
                        value = 1;
                    }
                } else {
                    if (isActive) {
                        self.btnUp(dislikeBtn);
                        d = -1;
                    } else {
                        if (hasActive) {
                            self.btnUp(likeBtn);
                            l = -1;
                        }
                        self.btnDown(dislikeBtn);
                        d = 1;
                        value = -1;
                    }
                }

                opts.click.call(self, value, l, d, event);
            });
        },
        disable: function (btn) {
            btn.addClass(this.opts.disabledClass);
            btn.off();
        }
    };

    $.fn.likeDislike = function (options) {
        return this.each(function () {
            if (!$.data(this, "plugin_LikeDislike")) {
                $.data(this, "plugin_LikeDislike",
                    new LikeDislike(this, options));
            }
        });
    };

})(jQuery);</script> 

<script>
 $('#rating').likeDislike({
        reverseMode: false,
        disabledClass: 'disable',
        click: function (value, l, d, event) {
            var likes = $(this.element).find('.likes');
            var dislikes =  $(this.element).find('.dislikes');

            likes.text(parseInt(likes.text()) + l);
            dislikes.text(parseInt(dislikes.text()) + d);
        }
    });
</script>
@endsection