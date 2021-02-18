@extends('layouts.app')

@section('content')

    {{-- Jumbotron --}}
    <div class="jumbotron text-center">

        {{-- Title --}}
        <h1>{{ $title }}</h1>

        {{-- Content --}}
        <p>A basic Laravel application to brush up on the basics...</p>

        <p>

            {{-- Login --}}
            <a href="/login" class="btn btn-success btn-lg">Login</a>

            {{-- Register --}}
            <a href="/register" class="btn btn-danger btn-lg">Register</a>

        </p>

    </div>
    
@endsection