@extends('layout.layout')
@section('title','Home')
@section('content')

    <h1> Home session </h1>
    
    @auth
        {{auth()->user()->name}}
    @endauth

@endsection
