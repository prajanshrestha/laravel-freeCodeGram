@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method("PATCH")
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Edit Profile</h2>
                </div>

                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" autocomplete="title" value="{{ old("title") ?? $user->profile->title }}" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" autocomplete="description" value="{{ old("description") ?? $user->profile->description }}" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="url" class="col-md-4 col-form-label">URL</label>

                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" autocomplete="url" value="{{ old("url") ?? $user->profile->url }}" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary" style="width: 15%">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
