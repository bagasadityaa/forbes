@extends('layouts.main')

@section('container')

@if ($posts->count())
<div class="card mb-3">
    @if ($posts[0]->image)
    <img src="{{asset('storage/' . $posts[0]->image)}}" alt="{{$posts[0]->category->name}}" class="img-fluid">
    @else
    <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="img-fluid" alt="{{$posts[0]->category->name}}">
    @endif
    <div class="card-body text-center">
        <h2><a href="/posts/{{$posts[0]->slug}}" class="card-title text-decoration-none text-dark">{{$posts[0]->title}}</a></h2>
        <p>
            <small class="text-muted">
                <a class="text-secondary text-decoration-none">{{$posts[0]->author->username}}</a> | <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none text-danger">{{$posts[0]->category->name}}</a> | {{$posts[0]->created_at->diffForHumans()}}
            </small>
        </p>
        <p class="card-text">{{$posts[0]->excerpt}}</p>
        <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none  btn btn-primary">Read more</a>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($posts->skip(1) as $post)
    <a href="/posts/{{$post->slug}}" class="btn">
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}" alt="{{$post->category->name}}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{!! $post->excerpt!!}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{$post->created_at->diffForHumans()}}</small>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>
</div>
@else
<p class="text-center fs-4">No post found.</p>
@endif
@endsection