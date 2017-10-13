@extends('layouts.app')

@section('content')
    <form method="POST" action="/" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Photo 1</h4>
                        @if ($errors->has('photo.0'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('photo.0') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="custom-file">
                                <input type="file" name="photo[]" class="custom-file-input" required>
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
                        @if ($errors->has('photo.1'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('photo.1') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="custom-file">
                                <input type="file" name="photo[]" class="custom-file-input" required>
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

    <div class="p-2" style="width: 80%;">
        <div class="card-columns">
        @foreach($photos as $photo)
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ $photo->getUrlPath() }}" alt="Card image cap">
            </div>
        @endforeach
        </div>
    </div>
@endsection
