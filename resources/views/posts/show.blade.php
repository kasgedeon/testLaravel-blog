@extends('layouts.app')

@section('content')

  <div class="container" >
      <a class='btn btn-default' href='/posts' role='button'>Go Back</a>
      <h1>{{$post->title}}</h1>
      <img style='width: 100%' src='/storage/cover_images/{{$post->cover_image}}'>
      <div style='margin-top: 20px'>
        {!!$post->body!!}
      </div><hr>
      <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
      <br><br>
      @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
          <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

          {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
          {!! Form::close() !!}
        @endif
    @endif
  </div>
@endsection
