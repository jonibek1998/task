@if ($errors->any())
<div class="row">
    <div class="col-md-8">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
