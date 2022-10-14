@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post_id->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pe-3">
                    <img src="/storage/{{ $post_id->user->profile->image }}" class="w-100 rounded-circle" style="max-width: 50px;">
                </div>
                <div>
                    <a href="/profile/{{ $post_id->user->id }}">
                        <b class="text-dark" style="text-decoration: none">{{ $post_id->user->username }}</b>
                    </a>
                </div>
                <a class="ps-3" href="#">Follow</a>
            </div>
            <hr>
            <div class="d-flex">
                <a href="/profile/{{ $post_id->user->id }}">
                    <span class="pe-3 text-dark" style="text-decoration: none">
                        <b>{{ $post_id->user->username }}</b>
                    </span>
                </a>
                <span>{{ $post_id->caption }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
