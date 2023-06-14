@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat datang, {{auth()->user()->name}}</h1>
</div>

<div class="table-responsive col-lg-12">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col " class="text-center">Title</th>
                <th scope="col " class="text-center">Category</th>
                <th scope="col " class="text-center">Image</th>
                <th scope="col " class="text-center">Excerpt</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->category->name}}</td>
                <td>
                    <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}" class="img-fluid" width="199" height="115">
                </td>
                <td>
                    {{ $post->excerpt }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection