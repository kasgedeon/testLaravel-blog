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
      <h1>Create Post</h1>

        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
          <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title...'])}}
          </div>
          <div class='form-group'>
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text...'])}}
          </div>
          {{Form::submit('Submit', ['class' => 'btn btn-primary', 'id' => 'submit'])}}
        {!! Form::close() !!}
      <hr>
  </div>
@endsection
