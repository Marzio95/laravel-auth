@extends('admin.templates.base')
@section('pageTitle')
    Create Post
@endsection


@section('pageMain')
    <form class="m-auto w-75 mt-4" method="POST" action="{{ route('admin.posts.store') }}">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input value="{{ old('name') }}" type="text" class="form-control" id="title" placeholder="Title"
                    name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="postText" class="col-sm-2 col-form-label">Testo del post</label>
            <div class="col-sm-10">
                <input value="{{ old('postText') }}" type="text" class="form-control" id="postText"
                    placeholder="Testo del post" name="postText">
                @error('postText')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row m-5 d-flex">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
            <div class="col-sm-10 mt-5">
                <a class="text-white bg-black p-2" href="{{ url()->previous() }}">Torna alla lista</a>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
