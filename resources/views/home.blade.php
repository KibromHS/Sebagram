@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/seventy.jpg" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>Seventy</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">seventy.com</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, quas!</div>
            <div><a href="#">seventy.com</a></div>
        </div>
        
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/seventy.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/seventy.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/seventy.jpg" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
