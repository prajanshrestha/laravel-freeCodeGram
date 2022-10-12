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
                <a href="#">Add a new post</a>
            </div>
            <div class="d-flex">
                <div class="pe-4"><strong>153</strong> posts</div>
                <div class="pe-4"><strong>20k</strong> followers</div>
                <div class="pe-4"><strong>212</strong> following</div>
            </div>
            <div class="mt-2"><strong>{{ $user->profile->title }}</strong></div>
            <div class=""><p>{{ $user->profile->description }}</p></div>
            <div class=""><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row" style="margin-top: -280px">
        <div class="col-4">
            <img src="https://mobiletraininginkathmandunepal.com/wp-content/uploads/2020/05/MacBook-Repair-Centers-in-Kathmandu-810x540.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://photos5.appleinsider.com/gallery/40575-78549-13-inch-MacBook-Air-apps-xl.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://lirp.cdn-website.com/md/unsplash/dms3rep/multi/opt/photo-1515248137880-45e105b710e0-640w.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
