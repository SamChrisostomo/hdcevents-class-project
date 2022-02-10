<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>@yield("title")</title>
        <!-- Css do materializeeCss -->
        <link rel="stylesheet" href="/css/materialize.min.css" />
        <!-- Link dos icones -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Css do projeto -->
        <link rel="stylesheet" href="/css/styles.css" />
    </head>
    <body>
        <header>
            <ul id="slide-out" class="sidenav">
                <!--<li>
                    <div class="user-view">
                        <div class="background">
                            <img src="images/office.jpg">
                        </div>
                        <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                        <a href="#name"><span class="white-text name">John Doe</span></a>
                        <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                    </div>
                </li>-->
                <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                <li><a href="#!">Second Link</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            </ul>
            <ul id="dropdown1" class="dropdown-content">
                @guest
                <li><a href="/login/">Login</a></li>
                <li><a href="/register">Cadastro</a></li>
                @endguest
            </ul>
            <nav class="grey darken-3">
                <div class="nav-wrapper">
                    <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large"><i class="material-icons">menu</i></a>
                    <a href="/" class="brand-logo">
                        <img src="/img/logo.svg" alt="">
                    </a>
                    <ul class="right hide-on-med-and-down" id="nav-mobile">
                        <li><a href="/">Eventos</a></li>
                        <li><a href="/events/create">Criar Evento</a></li>
                        @auth
                        <li><a href="/dashboard">Meus eventos</a></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout"
                                    onclick="
                                        event.preventDefault();
                                        this.closest('form').submit();
                                    ">
                                Sair
                                </a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Usuário<i class="material-icons right">arrow_drop_down</i></a></li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        @if (session('msg'))
            <span id="toastMsg" value="{{session('msg')}}"></span>
        @endif
        @yield("content")
        <!-- JavaScript do Jquery -->
        <script src="/js/jquery-3.6.0.min.js"></script>
        <!-- JavaScript do materializecss -->
        <script src="/js/materialize.min.js"></script>
        <!-- JavaScript do projeto -->
        <script src="/js/scripts.js">
            
        </script>
    </body>
</html>
