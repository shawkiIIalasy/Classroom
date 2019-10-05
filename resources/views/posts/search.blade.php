
@extends('layouts.app')

@section('content')
<div class="container" style="width:800px;">
			@if(isset($details))
			 <br>
			 <div class="form-group">
			 	<div class="well">
			 		<img src="{{asset('images/post/Search.png')}}" width="50px;" height="50px;" style="float:left; margin:-5px 10px 0px 0px;">
			 	<h4>Result Search for <a>{{ $query }} </a></h4>
			 </div>
			 </div>
			<h2>Match Post</h2>
			<table class="table table-striped" >
				
				<tbody>
					@foreach($details as $post)
					<div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">

                        <img style="width:50%" src="/storage/cover_image/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <h5><a href="/posts/{{$post->id}}">{!!$post->body!!}</a></h5>
                        <hr><br><small>Written on{{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<br>
			 <div class="form-group">
			 	<div class="well">
			 		<img src="{{asset('images/post/Search.png')}}" width="75px;" height="75px;" style="float:left; margin:0px 10px 0px 5px;">
			 	<h4>{{ $message }}<a>{{ $query }} </a></h4>
			 	<h6>Looking for people or posts? Try entering different words.</h6>
			 </div>
			 </div>
			@endif
		</div>


@endsection
@section('script')
<script type="text/javascript">
	// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
$('.read-more-content').addClass('hide')
$('.read-more-show, .read-more-hide').removeClass('hide')

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
  $(this).next('.read-more-content').removeClass('hide');
  $(this).addClass('hide');
  e.preventDefault();
});

// Changes contributed by @diego-rzg
$('.read-more-hide').on('click', function(e) {
  var p = $(this).parent('.read-more-content');
  p.addClass('hide');
  p.prev('.read-more-show').removeClass('hide'); // Hide only the preceding "Read More"
  e.preventDefault();
});
</script>
@endsection