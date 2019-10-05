
@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group" >
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-group', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
           <label class="btn btn-primary btn-file"><img src="{{ asset('images/post/photo.png') }}" style="margin-right: 5px; " width="20px;" height="20px;">Photo <input type="file" style="display: none;" name="cover_image">
            </label>
          
                  <label style="float: right;">
            {{Form::submit('Post', ['class'=>'btn btn-success'])}}
        </label>
              
        <label class="" style="float:right"><div class="btn-group timepickercontainer dropdown focus-active" id="atimepicker" data-value="Public">
            <button type="button" data-onClick="ScrollToActive(this);" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Public <i class="caret"></i>
            </button>
                <ul class="dropdown-menu" onLoad="SetScrollValue(this);">
                    <li><a href="#" onclick="HandleTimeSelect(this);" data-value="Public">Public</a></li>
                    <li><a href="#" onclick="HandleTimeSelect(this);" data-value="Classmates">Classmates</a></li>
                    <li><a href="#" onclick="HandleTimeSelect(this);" data-value="Only_Me">Only Me</a></li>     
                </ul>
 
</div></label>
               
                </div>

            
      
            

        
    {!! Form::close() !!}
@endsection
@section('script')
   <script> $(".dropdown.focus-active").on("shown.bs.dropdown", function() {$(this).find(".dropdown-menu li.active a").focus();});</script>
  <script src="{{ asset('js/DropDown.js') }}"></script>

  @endsection