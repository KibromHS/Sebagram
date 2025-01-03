@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-75">
        </div>
        <div class="col-4">
            <h1>{{ $post->user->username }}</h1>
            <p>{{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection