@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="row-cols-md-3 g-4">
            <div style="float: right;">
                @if ($post->count)
                <a href="/posts/{{$posts[0]->slug}}" class="btn">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('storage/' . $posts[0]->image)}}" alt="{{$posts[0]->category->name}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$posts[0]->title}}</h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{$posts[0]->created_at->diffForHumans()}}</small>
                            </div>
                        </div>
                    </div>
                </a>
                @endif
                <div style="margin-top: 38%;">
                    @foreach ($posts as $postss)
                    <a href="/posts/{{$postss->slug}}" class="btn mt-1">
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('storage/' . $postss->image)}}" alt="{{$postss->category->name}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{$postss->title}}</h5>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">{{$postss->created_at->diffForHumans()}}</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h1 class="mb-3">{{$post->title}}</h1>
            <div class="text-center">
                <a class="text-secondary text-decoration-none">
                    {{$post->author->username}}
                </a>
                |
                <a href="/categories/{{$post->category->slug}}" class="text-decoration-none text-danger">
                    {{$post->category->name}}
                </a>
                | {{$post->created_at->diffForHumans()}}
            </div>
            @if ($post->image)
            <div class="slideshow-container">
                <div class="mySlides fade" style="display: contents;">
                    <img src="{{asset('storage/' . $post->image)}}" style="width:100%">
                </div>

                @if ($post->link)
                <div class="mySlides fade">
                    <div class="ratio ratio-16x9">
                        <iframe width="1799" height="715" src="{{ $post->link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                @endif

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            @endif
            <div class="fs-6">{{ $post->caption }}</div>
            <article class="my-3 fs-5">{!!$post->body!!}</article>
            <div class="fs-6 mt-3">Artikel Terkait</div>
            <div class="row container">
                @foreach ($posts as $post)
                <div class="col-lg-6">
                    <table class="table table-borderless container">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <div class="card bg-light " style="width: 18rem;">
                                        <div class="card-body">
                                            <a href="/posts/{{$post->slug}}" class="card-title">{{$post->title}}</a>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection