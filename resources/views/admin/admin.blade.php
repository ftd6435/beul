<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>@yield('title') | Administration</title>

</head>
<body>

    @php
        $routeName = request()->route()->getName();
    @endphp

    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Biznews</a>

            <button class="navbar-toggler" type="button" data-bs-toggler="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('blog.home') }}" @class(['nav-link', 'active' => str_contains($routeName, 'blog')])>Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.post.index') }}" @class(['nav-link', 'active' => str_contains($routeName, 'post')])>Articles</a>
                    </li> 
                    <li class="nav-item">
                        <a href="{{ route('admin.category.index') }}" @class(['nav-link', 'active' => str_contains($routeName, 'category')])>Catégories</a>
                    </li> 
                    <li class="nav-item">
                        <a href="{{ route('admin.tag.index') }}" @class(['nav-link', 'active' => str_contains($routeName, 'tag')])>Tags</a>
                    </li>    
                </ul>

                <div class="ms-auto">
                    <ul class="navbar-nav">
                        @auth
                            <li class="nav-item">
                                <span class="nav-link">{{ Auth::user()->username }}</span>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('auth.logout') }}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                    <button class="btn btn-danger">Log Out</button>
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item mx-2">
                                <a href="{{ route('auth.login') }}" class="btn btn-success">Log In</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a href="{{ route('auth.signup') }}" class="btn btn-secondary">Sign Up</a>
                            </li>
                        @endguest
                    </ul>
                </div>

            </div>

        </div>
    </nav>
    
    <div class="container py-4">

        @include('shared.flash')

        @yield('content')
    </div>

</body>
</html>