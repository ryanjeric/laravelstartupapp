@extends('layouts.app')
@section('content')
        <div class="jumbotron text-center">
                <h1>Welcome To Laravel!</h1>
                <p>This is the laravel application from the YouTube series</p>
                <a href="https://www.youtube.com/playlist?list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-" target="_blank">"Laravel From Scratch"</a></p>
                <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
@endsection