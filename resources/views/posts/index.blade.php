@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/avatar.css')}}">
@endsection
@section('content')
    <h1>Posts</h1>
   @if(count($posts) > 0)

        @foreach($posts as $post)  
         <div class="container" style="width:800px;">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12 col-sm-8"> 

                   @if(isset($post->user->info->user_id))<img src="/storage/cover_image/{{$post->user->info->image}}" style="float:left;width:75px;height:75px;margin-right: 10px;" class="avatar img-circle" alt="avatar">
                            <h2 style="margin-bottom: -8px;">@if(Auth::user()->id ==$post->user->id)<a href="/myprofile">{{$post->user->name}}</a>@else<a href="/profile/{{$post->user->id}}">{{$post->user->name}}</a>@endif</h2> <small style="font-size:9px;">{{$post->created_at->diffforhumans()}}</small>
                        @elseif($post->user->sign != 't')
                        <img src="{{asset('images/noimage1.png')}}" style="float:left;width:75px;height:75px;margin-right: 10px;" class="avatar img-circle" alt="avatar"><h2 style="margin-bottom: -8px;">@if(Auth::user()->id ==$post->user->id)<a href="/myprofile">{{$post->user->name}}</a>@else<a href="/profile/{{$post->user->id}}">{{$post->user->name}}</a>@endif</h2> <small style="font-size:9px;">{{$post->created_at->diffforhumans()}}</small>
                        @else
                           <img src="{{asset('images/noimage.png')}}" style="float:left;width:75px;height:75px;margin-right: 10px;" class="avatar img-circle" alt="avatar"><h2 style="margin-bottom: -8px;">@if(Auth::user()->id ==$post->user->id)<a href="/myprofile">{{$post->user->name}}</a>@else<a href="/profile/{{$post->user->id}}">{{$post->user->name}}</a>@endif</h2> <small style="font-size:9px;">{{$post->created_at->diffforhumans()}}</small>
                        @endif
                          <h5 class="well" style="background: #fff ;width: 100%"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                        <div class="col-md-5 col-sm-12">@if($post->cover_image != 'noimage.png') 

                        <img style="width:700px;height:200px;" src="/storage/cover_image/{{$post->cover_image}}">
                    
                    @endif</div>  
                </div>
                 <div class="col-md-12 col-sm-8">
                    
                  <div class="well" style="background: #fff;">
                        <h6>{!!$post->body!!}</h6> </div>
                  </div>
               
                  <div class="col-md-12 col-sm-9">
                        <div class="card">
                <div class="card_block">
                    <form method="POST" action="/posts/{{$post->id}}/like">
                      {{ csrf_field() }}
                      {{ method_field('POST') }}
                        <div class="form-group">
                           <div class="rating" id="rating">
            <button class="btn btn-default  glyphicon glyphicon-thumbs-up">Like <span class="badge">{{count($post->like)}}</span></button>
            <button href="#{{$post->id}}" data-toggle="collapse" class="btn btn-default  glyphicon glyphicon-comment">Comment
              <span class="badge">{{count($post->comment)}}</span></button>

<div id="{{$post->id}}" class="collapse">


                 
            <h3>Comments</h3>
             <div class="Comment" id="comment-box">
                @foreach ($post->comment as $comment)
          
           
                <div class="user-comment-box">
                    <div class="well"> 
                    {{$comment->body}}
                    <div class="pull-right">
                      <small>  @if(Auth::user()->id ==$comment->user->id)<a href="/myprofile"  style="margin-right: 0px;">{{$comment->user->name}}</a>@else<a href="/profile/{{$comment->user->id}}"  style="margin-right: 0px;">{{$comment->user->name}}</a>@endif @if(Auth::user()->id == $comment->user_id) ||  <a href="/posts/{{$comment->id}}/deletecomment" style="color: #1abc9c " name="submit" type="submit" > Edit</a> || 
                    <a href="/posts/{{$comment->id}}/deletecomment" style="color: #bf5329 " name="submit" type="submit" >Delete</a>
                @endif</small>

                    
                 </div></div>
                <hr class="btn-primary"></div>
                @endforeach
                  @if(count($post->comment)>0)<a class="see-more">See more Comment..</a>@endif
              </div>
            
            </div></div>
                     <div class="col-md-12 col-sm-8">
                        <small style="float:right;">{{$post->created_at}}</small> 
                  </div>
                </div>
          </form>
        </div>
        
     </div></div> </div></div></div><br>
        @endforeach
        {{$posts->links()}}
    
    @else
       <div class="form-group">
        <div class="well">
          <img src="{{asset('images/post/Search.png')}}" width="75px;" height="75px;" style="float:left; margin:0px 10px 0px 5px;">
        <h4>No post found</a></h4>
        <h6>Looking for people or posts? or make a <a href="/dashboard" >post</a></h6>
       </div>
       </div>
    @endif

@endsection
@section('script')
<script type="text/javascript">
    $(function(){
       // select the first 5 hidden divs

    $( ".Comment" ).each(function( index ) {
 $(this).children(".user-comment-box").slice(-3).show();
});

        $(".see-more").click(function(e){ // click event for load more
            e.preventDefault();
            var done = $('<div class="see-more=done"></div>');
            $(this).siblings(".user-comment-box:hidden").slice(-5).show(); // select next 5 hidden divs and show them
            if($(this).siblings(".user-comment-box:hidden").length == 0){ // check if any hidden divs
                $(this).replaceWith(done); // if there are none left
            }
        });
});
</script>
@endsection