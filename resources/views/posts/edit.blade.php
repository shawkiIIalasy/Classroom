@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
           <label class="btn btn-primary btn-file"><img src="{{ asset('images/post/photo.png') }}" style="margin-right: 5px; " width="20px;" height="20px;">Photo <input type="file" style="display: none;" name="cover_image">
            </label>
    
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection