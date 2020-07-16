<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
    </head>
    <body>
        @section('header')
            <section id="header">
                <div class="navbar">
                    <button class="nav-btn">
                        <img src="{{URL::asset('/icon/editar.png')}}" alt="">Seja um Franqueado
                    </button>
                    <button class="nav-btn">
                        <img src="{{URL::asset('/icon/seja_consultor.png')}}" alt="">Seja um Consultor (a)
                    </button>
                    <button class="nav-btn">
                        Quero Comprar
                    </button>
                    <button class="nav-btn float-btn">
                        <img src="{{URL::asset('/icon/area_restrita.png')}}" alt="">Área Restrita
                    </button>
                </div>
                @yield('header-content')
            </section>
        @show
        
        @yield('content')
    </body>
    <footer></footer>
</html>
