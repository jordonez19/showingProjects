<hr style="opacity: 0.1">
@csrf
<div class="form-group">
        <input
        class="form-control bg-light shadow-sm border-0 @error('title')
        is-invalid
        @enderror"
        value="{{old('title',$project->title)}}"
        name="title"
        placeholder="Project Title"
        type="text">
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }} </strong>
            </span>
        @enderror <br>
</div>

<div class="form-group">
        <input
        class="form-control bg-light shadow-sm border-0 @error('url')
        is-invalid
        @enderror"
        value="{{old('url',$project->url)}}"
        name="url"
        placeholder=" Project URL"
        type="text">
        @error('url')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }} </strong>
            </span>
        @enderror <br>
</div>


<div class="form-group">
        <textarea
            class="form-control bg-light shadow-sm border-0 @error('content')
            is-invalid
            @enderror"
            name="description"
            placeholder="description"
            id=""
            cols="30"
            rows="3">{{old('description',$project->description)}}
        </textarea><br>
</div>

    <input class="form-control  btn btn-primary btn-lg btn-block " type="submit" value="Submit">

