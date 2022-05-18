@extends('admin.templates.base')
@section('pageTitle', $pageTitle)

@section('pageMain')
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="card m-5" style="width: 18rem;">
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

        <div class="d-flex">
            <div class="m-5">
                <a class="text-white bg-black p-2" href="{{ url()->previous() }}">Torna indietro</a>
            </div>
            <div class="m-5">
                <a class="text-white bg-black p-2" href="{{ route('admin.posts.index', 'PostController') }}">Torna alla
                    lista</a>
            </div>
        </div>

    </div>
@endsection
