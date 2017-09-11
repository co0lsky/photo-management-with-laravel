@extends('layouts.app')

@section('content')
<form method="POST" action="/" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="custom-file">
            <input type="file" name="photo" class="custom-file-input">
            <span class="custom-file-control"></span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
