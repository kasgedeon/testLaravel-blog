<style>
  .btn {
    border-radius: 4px;
    box-shadow: 5px 8px 2px rgba(0, 0, 0, 0.2);
    color: #ccc333;
  }
</style>

@extends('layouts.app')

@section('content')
  <div class="container" style='margin-top: 50px'>
    <div class="jumbotron text-center">
      <h1>Welcome at Gedeon's</h1><hr>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      <p><a class='btn-lg btn' href='/login' role='button'>Sign In</a>
         <a class='btn-lg btn' href='/register' role='button'>Sign Up</a>
      </p>
      <!--<h1>{{$title}}</h1>-->
    </div>
  </div>
@endsection
