@extends('layouts.app')

@section('content')
  <div class="container" >

      <h2>Posts</h2>
      @if(count($posts) > 0)
        @foreach($posts as $post)
          <div class='well'>
            <h4><a href='/posts/{{$post->id}}'> {{$post->title}}</a></h4>
            <small>Written  on {{$post->created_at}} by {{$post->user->name}}</small>
          </div>
        @endforeach
        {{$posts->links()}} <!-- pagination -->
      @else
        <p>No Posts found</p>
      @endif

  </div>
@endsection
