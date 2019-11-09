<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <header class="container page-header">
            <div class="title">
                <h1>Lead Me Home Rescue</h1>
            </div>
            <nav class="links">
                <a href="#">Dogs</a>
                <a href="#">Transports</a>
                <a href="#">Adoptions</a>
                <a href="#">Donate</a>
            </nav>
        </header>
        <main class="container landing">
            <div class="logo">
                <img src="{{ asset('storage/LeadMeHome_Logo_Icon.png') }}" alt="logo" height="500vh">
            </div>
            <div class="callout">
                <h2>For Luna</h2>
                <a href="#">Adopt Your Next Pet!</a>
            </div>
            {{-- <div class="container boxes">
                <div class="box">
                    <h3>Section Callout</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, corporis magnam natus repellat iure magni cum adipisci laborum atque, quisquam ipsam deleniti ex omnis fugiat vel voluptate harum, eligendi et.</p>
                </div>
                <div class="box">
                    <h3>Section Callout</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, corporis magnam natus repellat iure magni cum adipisci laborum atque, quisquam ipsam deleniti ex omnis fugiat vel voluptate harum, eligendi et.</p>
                </div>
                <div class="box">
                    <h3>Section Callout</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, corporis magnam natus repellat iure magni cum adipisci laborum atque, quisquam ipsam deleniti ex omnis fugiat vel voluptate harum, eligendi et.</p>
                </div>
                <div class="box">
                    <h3>Section Callout</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, corporis magnam natus repellat iure magni cum adipisci laborum atque, quisquam ipsam deleniti ex omnis fugiat vel voluptate harum, eligendi et.</p>
                </div>
            </div> --}}
        </main>       
    </body>
</html>
