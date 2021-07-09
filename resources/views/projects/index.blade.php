@extends('layout.layout')
@section('title','projects')
@section('style')
@if ( session('status') )
<div class="row m-0">
    <div class="col btn btn-primary">
        <span class="text-light  h4" >
            {{ session('status') }}
        </span>
    </div>
</div>
@endif

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center m-0">
            <h1 class="display-4"> Portafolio </h1>
            @auth
                <a class="btn btn-primary rounded shadow-sm fw-bold h4 my-0 text-light" href="{{route('projects.create')}}">Create</a>
            @endauth
        </div>

        @if ( $projects )
            <hr class="m-0" style="opacity:0.1;"><br>
            <p class="lead text-secondary">
                This is a list of projects, please feel free to look at each of them.
            </p>
        @endif

        <ul class="list-group">
            @forelse ($projects as $project)

                <li class="list-group-item border-0 h5 mb-3 shadow-sm text-capitalize">
                    <a style="text-decoration:none;" class="d-flex justify-content-between align-items-center"
                        href="{{route('projects.show', $project)}}">
                        <span  class="text-secondary fw-bold ">
                            {{ $project->title }}
                        </span>
                        <span class="text-black-50 ">
                            {{ $project->created_at->format('d-m-Y-H:s') }}
                        </span>
                    </a>

                </li>
            @empty
                <h3>Not info</h3>
            @endforelse

                <hr style="opacity:0.1;">
            {{$projects->links()}}
        </ul>
    </div>
@endsection
