@extends('layouts.app')

@section('content')
<form method="POST" action="/" enctype="multipart/form-data">
    {{ csrf_field() }}
    @if ($errors->has('photo'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('photo') }}
        </div>
    @endif
    <div class="form-group">
        <label class="custom-file">
            <input type="file" name="photo" class="custom-file-input">
            <span class="custom-file-control"></span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
