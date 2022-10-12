@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Add New Post</h2>
                </div>

                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary" style="width: 20%">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
