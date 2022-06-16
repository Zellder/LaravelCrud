<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonte do Google--> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- css Bootstrap--> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- css da aplicação--> 
        <link rel="stylesheet" href="/css/styles.css">
        <script scr="/js/scripts.js"></script>
</header>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
         <div class="collapse navbar-collapse" id="navbar">
             <a href="/" class="navbar-brand">

             </a>
             <ul class="navbar-nav">
                <li class="nav-item">
                 <a href="/" class="nav-link text-light">DocsOn</a>
                </li>
                <li class="nav-item">
                 <a href="/create" class="nav-link text-light">Cadastro</a>
                </li>
                <li class="nav-item">
                 <a href="/consulta" class="nav-link text-light">Consulta</a>
                </li>
                <li class="nav-item">
                 <a href="/login" class="nav-link text-light">Entrar</a>
                </li>
             </ul>
         </div>
        </nav>
    </header>
@yield('content')
</body>
</html>