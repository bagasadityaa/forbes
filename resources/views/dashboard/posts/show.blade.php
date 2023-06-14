@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{$post->title}}</h1>
            <a href="/dashboard/posts" class="btn btn-success mt-2"><span data-feather="arrow-left"></span>Balik ke post</a>
            <a href="/posts/{{$post->slug}}" class="btn btn-success mt-2"><span data-feather="file-text"></span>Lihat Postingan</a>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning mt-2"><span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mt-2" onclick="return confirm('Apa anda ingin menghapus post?')"><span data-feather="delete"></span>Delete</button>
            </form>
            @if ($post->image)
            <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
            @else
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid mt-3" alt="{{$post->category->name}}">
            @endif
            <article class="my-3 fs-5">{{$post->body}}</article>
            <a href="/blog" class="d-block mt-3">Back to post</a>
        </div>
    </div>
</div>
@endsection