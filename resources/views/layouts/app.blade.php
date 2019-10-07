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
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery.mask.min.js')}}"></script>
    <script src="{{ asset('js/scrollreveal.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color: #05351a;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('img/mascote-topo.png')}}" alt="mascote" style="max-width: 80px;">
                SI - Portas Abertas
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-building"></i> Escolas<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('novo_cadastro_escola') }}">
                                    <i class="fa fa-plus"></i>
                                    {{ __('Novo') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('listar_escola') }}">
                                    <i class="fa fa-list"></i>
                                    {{ __('Listar') }}
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-users"></i> Visitantes<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('listar_escola') }}">
                                    <i class="fa fa-plus"></i>
                                    {{ __('Novo') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('listar_visitante') }}">
                                    <i class="fa fa-list"></i>
                                    {{ __('Listar') }}
                                </a>
                            </div>
                        </li>
                    @endauth

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    @guest
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-file-pdf-o"></i> Relatórios<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('exportar_pdf_escola') }}">
                                    {{ __('Relatório das Escolas') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('exportar_pdf_visitante') }}">
                                    {{ __('Relatório dos Visitantes') }}
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<script>
    $(document).ready(function () {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    });
    $(document).ready(function ($){
        $('#telefone').mask('(00)0000-0000');
        $('#celular').mask('(00)00000-0000');
        setTimeout(function(){$('#texto-sucesso').hide(1000);},2500);

        ScrollReveal().reveal('.headline',{reset:true, delay:500});

    });
</script>
</body>
</html>
