@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="/images/logo.jpg" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/images/post1.jpg" class="w-100 " alt="">
        </div>
        <div class="col-4">
            <img src="/images/post2.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="/images/post3.jpg" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
