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
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="/">Login</a></li>
            <li><a href="/">Cadastro</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper">
                <a href="/" class="brand-logo">
                    <img src="/img/logo.svg" alt="">
                </a>
                <ul class="right hide-on-med-and-down" id="nav-mobile">
                    <li><a href="/">Eventos</a></li>
                    <li><a href="/events/create">Criar Evento</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Usuário<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
        @yield("content")
        <!-- JavaScript do Jquery -->
        <script src="/js/jquery-3.6.0.min.js"></script>
        <!-- JavaScript do materializecss -->
        <script src="/js/materialize.min.js"></script>
        <!-- JavaScript do projeto -->
        <script src="/js/scripts.js"></script>
    <footer>
        <p>HDC Events &copy; 2022;</p>
    </footer>
    </body>
</html>
