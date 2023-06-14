@extends('layouts.main')

<!-- @section('container')
<h1 class="mt-5">Post Categories</h1> -->
@section('container')
<h1 class="mb-2 text-center mt-5">Categories</h1>
<div class="row justify-content-center">
</div>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-2">
            <a href="/categories/{{$category->slug}}">
                <div class="card bg-dark text-white mt-3">
                    <img src="{{asset('storage/' . $category->image)}}" class="card-img-top" alt="{{$categories[0]->name}}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill padding-4 fs-3" style="background-color: rgba(0,0,0,0.7);">{{$category->name}}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection