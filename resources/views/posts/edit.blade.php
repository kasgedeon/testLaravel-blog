<style>
  #submit {
    box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.2);
    float: right;
    width: 150px;
  }
</style>

@extends('layouts.app')

@section('content')

  <div class="container" >
      <h1>Edit Post</h1>

        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title...'])}}
          </div>
          <div class='form-group'>
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text...'])}}
          </div>
          <div class='form-group'>
            {{Form::file('cover_image')}}
          </div>
          {{Form::hidden('_method', 'PUT')}}
          {{Form::submit('Submit', ['class' => 'btn btn-primary', 'id' => 'submit'])}}
        {!! Form::close() !!}
      <hr>
  </div>
@endsection
