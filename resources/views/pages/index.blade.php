@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Welcome To Laravel</h1>
    <p>This is a laravel application from the "laravel from scratch" youtube series </p>
    <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/register" class="btn btn-success btn-lg" role="button">Register</a></p>
</div>
<h1>{{$title}}</h1>
@endsection
        
 