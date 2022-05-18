@extends('admin.templates.base')
@section('pageTitle', $pageTitle)



<div class="d-flex justify-content-center align-items-center width-100 h-100">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->postText }}.</p>
            <a href="#" class="card-link">Edit post</a>
            <a href="#" class="card-link">Delete post</a>
        </div>
    </div>
</div>
