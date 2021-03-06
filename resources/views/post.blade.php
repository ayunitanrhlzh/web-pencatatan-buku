    @extends('layouts.main')

    @section('container')

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h1 class="mb-3">{{ $post->title }}</h1>

                    <p>Author. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?kategori={{ $post->kategori->slug }}" class="text-decoration-none">{{ $post->kategori->name}}</a> Published.<p>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->kategori->name }}" alt="{{ $post->kategori->name }}" class="img-fluid">

                    <article class="my-3 fs-5">
                    {!! $post->body !!}
                    </article>

                    <a href="/posts" class="d-block">Back to Collection</a>
                </div>
            </div>
        </div>
    @endsection