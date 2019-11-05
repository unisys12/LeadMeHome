<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <header class="container page-header">
            <div class="title">
                <h1>Lead Me Home Rescue</h1>
            </div>
            <nav class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                {{-- <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a> --}}
            </nav>
        </header>
        <main class="container">
            <div class="logo">
                <img src="{{ asset('storage/LeadMeHome_Logo_Icon.png') }}" alt="logo" width="90px" height="110px">
            </div>
        </main>       
    </body>
</html>
