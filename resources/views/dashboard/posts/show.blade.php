@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>Author. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?kategori={{ $post->kategori->slug }}" class="text-decoration-none">{{ $post->kategori->name}}</a> Published.<p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->kategori->name }}" alt="{{ $post->kategori->name }}" class="img-fluid">

            <a href="/dashboard/posts" class="btn btn-success mt-3"><span data-feather="arrow-left"></span> Back to all my post</a>
            <a href="/dashboard/posts/{{ $post->id }}/edit" class="btn btn-warning mt-3"><span data-feather="edit"></span> Edit</a>

            <form action="/dashboard/posts/{{ $post->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>

            <article class="my-3 fs-5 mt-3">
            {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block">Back to Collection</a>
        </div>
    </div>
</div>

@endsection