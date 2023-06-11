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

<body class="bg-secondary bg-gradient">

    <div class="container" style="height: 100vh">
        <div class="row d-flex align-items-center" style="height: 95vh">
            <div class="col-md-8 offset-md-2 text-center bg-light shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <div class="mb-3">
                    <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
                </div>
            
                @if (session('status') == 'verification-link-sent')
                    <div>
                        <p>A new verification link has been sent to the email address you provided during registration.</p>
                    </div>
                @endif
            
                <div class="mt-4 flex items-center justify-between">
                    <form method="POST" class="mb-3" action="{{ route('verification.send') }}">
                        @csrf
            
                        <div>
                           <button type="submit" class="btn btn-primary">
                                Renvoyer email de verification
                           </button>
                        </div>
                    </form>
            
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
            
                        <button type="submit" class="btn btn-danger">
                            Se deconnecter
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
