<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    @vite(['resources/css/style.css','resources/js/app.js','resources/js/main.js'])

</head>

<body class="bg-secondary">

    <div class="container" style="height: 100vh">
        <div class="row d-flex align-items-center" style="height: 95vh">
            <div class="col-md-6 offset-md-3">
                <form method="POST" class="border bg-light shadow-lg p-3 mb-5 bg-body-tertiary rounded p-5" action="{{ route('login') }}">
                    @csrf
            
                    <!-- Email input -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Email', 'name' => 'email', 'type' => 'email'])
        
                    <!-- Password input -->
                    @include('shared.input', ['class' => 'mb-4', 'label' => 'Mot de passe', 'name' => 'password', 'type' => 'password'])
             
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

