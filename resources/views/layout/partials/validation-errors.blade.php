@if($errors->any())
<div class="card border-danger mb-3" style="max-width: 100%;">
    <div class="card-header text-danger"><b>ERRORS</b></div>
    <div class="card-body text-danger">
        <h5 class="card-title">please fill the next inputs</h5>
        <ul class="info-box-success">
                @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
