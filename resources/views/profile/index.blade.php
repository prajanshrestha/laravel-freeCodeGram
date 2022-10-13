@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/ikqra03zdnggljdu5vv0" class="rounded-circle" style="height: 35%">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can("update", $user->profile)
                    <a href="/post/create">Add a new post</a>
                @endcan
            </div>

            @can("update", $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Post</a>
            @endcan

            <div class="d-flex">
                <div class="pe-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-4"><strong>20k</strong> followers</div>
                <div class="pe-4"><strong>212</strong> following</div>
            </div>
            <div class="mt-2"><strong>{{ $user->profile->title }}</strong></div>
            <div class=""><p>{{ $user->profile->description }}</p></div>
            <div class=""><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row" style="margin-top: -280px">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
