@extends('admin.templates.base')
@section('pageTitle', $pageTitle)
<div class="d-flex justify-content-center align-items-center width-100 h-100">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text mb-3">{{ $post->postText }}.</p>
            <a class="tasto_show bg-black mt-3" href="{{ route('admin.posts.edit', $post->id) }}">Modifica Post</a>

            <form method="POST" data-base="{{ route('admin.posts.index') }}">
                @csrf
                @method('DELETE')
                <button class="bg-danger text-white p-1 mt-4">ELIMINA POST</button>
            </form>
        </div>
    </div>
</div>
