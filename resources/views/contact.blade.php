@extends('layout.layout')
@section('title','contact')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6  mx-auto">
            <form   class="bg-white shadow rounded py-3 px-4"
                    style="margin: 0cm 0;"
                    action="{{route('contact')}}"
                    method="POST">
                @csrf
                <h1 class="display-5 text-center"> Contact </h1>
                <hr style="opacity: 0.1">
                <div class="form-group">
                    <input
                        class="form-control bg-light shadow-sm border-0 @error('name')
                        is-invalid
                        @enderror "
                        name="name"
                        vlaue = {{old('name')}}
                        type="text"
                        placeholder="name" ><br>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <input
                        class="form-control bg-light shadow-sm border-0 @error('email')
                        is-invalid
                        @enderror"
                        name="email"
                        vlaue = {{old('email')}}
                        type="text"
                        placeholder="email" ><br>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <input
                        class="form-control bg-light shadow-sm border-0 @error('subject')
                        is-invalid
                        @enderror"
                        name="subject"
                        vlaue = {{old('subject')}}
                        type="text"
                        placeholder="subject" ><br>
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <textarea
                        class="form-control bg-light shadow-sm border-0 @error('content')
                        is-invalid
                        @enderror"
                        name="description"
                        placeholder="content"
                        id=""
                        cols="30"
                        rows="3">{{old('content')}}
                    </textarea><br>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                        <input
                            class="form-control btn btn-primary btn-lg btn-block "
                            type="submit"
                            value="send">
                </div>
            </form>
        </div>
    </div>
    </div>
</div>


@endsection


