<nav class="navbar bg-light">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="/img/FORBER.PNG" width="150px" height="40px">
        </a>
        @if (auth()->user() == false)
        <a class="btn" href="/login">
            <i class="bi bi-person-circle"></i>
        </a>
        @endif
        @auth
        <div class="dropdown">
            <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            Log out<span data-feather="log-out"></span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        @endauth
    </div>
</nav>
<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white mt-4" aria-current="page" href="/">Home</a>
                </li>
                @foreach ($categories as $category)
                <li class="nav-item">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <a class="nav-link active text-white" aria-current="page" href="/categories/{{$category->slug}}">
                                        <img src="{{asset('storage/' . $category->img)}}" alt="{{$category->name}}" class="img-fluid" width="40px" height="80px" style="left:10px;">
                                        {{ $category->name }}
                                    </a>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Maaf tidak dapat menampilkan gambar karna menggunakan hosting gratis
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>