<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    weFashion
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('solde') }}">Solde</a>
                        </li>
                        @foreach (App\Categories::all() as $category)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home', ['categories' => $category->slug]) }}">{{$category->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="mt-auto text-white-50 bg-dark">
        <div class="container p-4">
            <div class="row justify-content-around" style="color:white;">
                <div>
                    <ul style="list-style:none;">
                        <li><h3>Informations</h3></li>
                        <li><a style="color:gray" href="#">Mentions Légale</a></li>
                        <li><a style="color:gray" href="#">Press</a></li>
                        <li><a style="color:gray" href="#">Fabrication</a></li>
                    </ul>
                </div>
                <div>
                    <ul style="list-style:none;">
                        <li><h3>Service client</h3></a></li>
                        <li><a style="color:gray" href="#">Contactez-nous</a></li>
                        <li><a style="color:gray" href="#">Livraison & Retour</a></li>
                        <li><a style="color:gray" href="#">Conditions de vente</a></li>
                    </ul>
                </div>
                <div>
                    
                    <ul style="list-style:none;">
                        <li><h3>réseaux sociaux</h3></a></li>
                        <li><a style="color:gray" href="#">facebook</a></li>
                        <li><a style="color:gray" href="#">instagram</a></li>
                        <li><a style="color:gray" href="#">Inscrivez vous à la newsletter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
