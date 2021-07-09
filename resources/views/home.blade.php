@extends('layout.layout')
@section('title','Home')
@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col">
                @if (auth()->user())
                <h1>
                    Welcome
                    @auth
                    <b class="text-primary text-capitalize"> {{auth()->user()->name}} </b>
                    @endauth
                    to a <b class="text-primary">Blog</b> of projects
                </h1>
                @else
                    <h1> Welcome to a <b class="text-primary"><a href="{{'login'}}">Blog</a></b> of projects </h1>
                @endif
            </div>
            <div class="col bg-red">
            </div>
        </div>

    </div>
</div>


@endsection
