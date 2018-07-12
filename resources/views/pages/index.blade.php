@extends('layouts.app')

@section('content')
       <div class="jumbotron text-center">
           <h1>Welcome to Laravel!</h1>
           <p>It's just the laravel course from scratch</p>
           <p>
           <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
           <a class="btn btn-success btn-lg" href="/register">Register</a>
           </p>
       </div>
@endsection
