@extends('layout.layout')
@section('title','project')
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
    <div class="content">
        <div class="col-12 col-sm-10 col-lg-6  mx-auto bg-white p-4 shadow">
                <h1 class=" text-black text-capitalize"><b>{{$project->title}}</b></h1>
                <h3><b class="text-black" >Description</b></h3>
                <p style="word-wrap: break-word;" class="text-secondary ">{{$project->description}}</p><br>

                <div class="d-flex justify-content-between ">
                    @auth
                    <a class=" fw-bold  my-0 text-primary" href="{{route('projects.index')}}">Go back</a>
                    <form  action=" {{route('projects.destroy', $project)}} " method="post">
                        <a class="btn btn-primary rounded shadow-sm fw-bold h4 my-0 text-light" href=" {{route('projects.edit', $project)}} ">Edit</a>
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger rounded shadow-sm fw-bold h4 my-0 text-light" href="">Eliminar</button>
                    </form>
                    @endauth
                </div>
        </div><br>
    </div>
</div>
@endsection
