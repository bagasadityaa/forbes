@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-register">
            <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="nama" required value="{{old('name')}}">
                    <label for="name">Nama</label>
                    @error('name')
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{old('username')}}">
                    <label for="username">Nama lengkap</label>
                    @error('username')
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{old('email')}}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
                <small class="d-block text-end mt-3">Sudah punya akun?<a href="/login">Login</a></small>
            </form>
        </main>
    </div>
</div>

@endsection