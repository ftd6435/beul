<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    @vite(['resources/css/style.css', 'resources/js/app.js',])

    <title>@yield('title') | Administration</title>

</head>
<body>

    @php
        $routeName = request()->route()->getName();
    @endphp


    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-blogger' ></i>
          <span class="logo_name"><span class="primary-color">BEUL</span>NEWS</span>
        </div>

        <ul class="s-nav-links">
            <li>
                <a href="{{ route('blog.home') }}">
                  <i class='bx bxs-home' ></i>
                  <span class="link_name">Home</span>
                </a>
        
                <ul class="sub-menu blank">
                  <li><a class="link_name" href="{{ route('blog.home') }}">Home</a></li>
                </ul>
            </li>
    
            <li @class(['active' => str_contains($routeName, 'dashboard')])>
                <a href="{{ route('admin.dashboard') }}">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
                </a>
        
                <ul class="sub-menu blank">
                <li><a class="link_name" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                </ul>
            </li>

            <li @class(['active' => str_contains($routeName, 'post')])>
                <div class="icon-link">
                <a href="{{ route('admin.post.index') }}">
                    <i class='bx bx-book-alt'></i>
                    <span class="link_name">Articles</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('admin.post.index') }}">Articles</a></li>
                <li><a href="{{ route('admin.post.index') }}">Afficher les Articles</a></li>
                <li><a href="{{ route('admin.post.create') }}">Créé un article</a></li>
                </ul>
            </li>
        
            <li @class(['active' => str_contains($routeName, 'category')])>
                <div class="icon-link">
                <a href="{{ route('admin.category.index') }}">
                    <i class='bx bx-collection'></i>
                    <span class="link_name">Categories</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('admin.category.index') }}">Categories</a></li>
                <li><a href="{{ route('admin.category.index') }}">Afficher les catégories</a></li>
                <li><a href="{{ route('admin.category.create') }}">Créé une catégorie</a></li>
                </ul>
            </li>

            <li @class(['active' => str_contains($routeName, 'tag')])>
                <div class="icon-link">
                <a href="{{ route('admin.tag.index') }}">
                    <i class='bx bx-tag-alt' ></i>
                    <span class="link_name">Tags</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
                </div>
        
                <ul class="sub-menu">
                <li><a class="link_name" href="{{ route('admin.tag.index') }}">Tags</a></li>
                <li><a href="{{ route('admin.tag.index') }}">Afficher les tags</a></li>
                <li><a href="{{ route('admin.tag.create') }}">Créé un tag</a></li>
                </ul>
            </li>

            @auth
            <li>
                <a href="#">
                    <i class='bx bxs-user-account' ></i>
                    <span class="link_name">Users</span>
                </a>

                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Users</a></li>
                </ul>
            </li>
            @endauth

            @auth
            <li @class(['active' => str_contains($routeName, 'profile')])>
                <div class="icon-link">
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="link_name">Settings</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
                </div>
        
                <ul class="sub-menu">
                <li><a class="link_name" href="#">Settings</a></li>
                <li><a href="{{ route('profile.details') }}">Profile</a></li>
                <li><a href="{{ route('profile.edit') }}">Editer</a></li>
                <li><a href="{{ route('profile.destroy') }}">Supprimer compte</a></li>
                </ul>
            </li>
            @endauth

            @auth
            <li @class(['active' => str_contains($routeName, 'archive')])>
                <div class="icon-link">
                <a href="#">
                    <i class='bx bxs-trash'></i>
                    <span class="link_name">Corbeille</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
                </div>
        
                <ul class="sub-menu">
                <li><a class="link_name" href="#">Corbeille</a></li>
                <li><a href="{{ route('admin.post.corbeille') }}">Articles</a></li>
                <li><a href="{{ route('admin.category.corbeille') }}">Categories</a></li>
                <li><a href="{{ route('admin.tag.corbeille') }}">Tags</a></li>
                <li><a href="#">Users</a></li>
                </ul>
            </li>
            @endauth
        
            @auth
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="{{ Auth::user()->getUserImage() }}" alt="profile">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">{{ Auth::user()->name }}</div>
                        <div class="job-title">Web Designer</div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf 

                        <button><i class='bx bx-log-out'></i></button>
                    </form>
                </div>
            </li>
            @endauth
        </ul>
    
    </div>

    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu-alt-left' ></i>
          <span class="text">Menu</span>
        </div>

        <div class="container-fluid py-4">
            @include('shared.flash')
            @yield('content')
        </div>
    </section>

</body>
</html>