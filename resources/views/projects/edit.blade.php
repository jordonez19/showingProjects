@extends('layout.layout')
@section('title','project')
@section('style')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6  mx-auto">
                <form   class="bg-white shadow rounded py-3 px-4"
                        style="margin: 0cm 0;"
                        action="{{route('projects.update', $project)}}"
                        method="POST">
                        @method('PATCH')
                        <h1>Editar projecto</h1>
                        @include('projects._form')

                </form>
            </div>
        </div>
        @include('layout.partials.session-status')
    </div>
@endsection
