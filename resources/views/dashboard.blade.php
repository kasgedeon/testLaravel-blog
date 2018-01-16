@extends('layouts.app')

@section('content')
<div class="container" style='margin-top: 20px'>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style='background: #eee'>
                <div class="panel-heading" style='background: #eee'>Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary" style='box-shadow: 1px 5px 4px rgba(0, 0, 0, 0.2)'>Create Post</a>
                    <h3>Your Blog Posts</h3>

                    @if(count($posts) > 0)
                      <table class='table table-striped'>
                        <tr>
                          <th>Title</th>
                          <th></th>
                          <th></th>
                        </tr>
                        @foreach ($posts as $post)
                          <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                            <td>
                              {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                              {!! Form::close() !!}
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    @else
                      <p>You have no posts!</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
