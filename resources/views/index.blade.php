@extends('layouts.app')

@section('content')
<form method="POST" action="/" enctype="multipart/form-data">
    {{ csrf_field() }}
    @if ($errors->has('photo.*'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('photo.*') }}
        </div>
    @endif


    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Photo 1</h4>
                    <div class="form-group">
                        <label class="custom-file">
                            <input type="file" name="photo[]" class="custom-file-input">
                            <span class="custom-file-control"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Photo 2</h4>
                    <div class="form-group">
                        <label class="custom-file">
                            <input type="file" name="photo[]" class="custom-file-input">
                            <span class="custom-file-control"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </div>
    </div>
</form>
@endsection
