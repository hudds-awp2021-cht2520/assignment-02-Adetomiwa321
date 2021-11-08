<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SneakStore - @yield('title')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <section class="pageHeader">
		<div class="container mx-auto">
            <h1>SneakStore!</h1>
		</div>
        </section>

        <ul class="navbar">
    <li><a href="/">Home</a></li>                
    @if (Auth::guest())
        <li><a href="/login">Login</a></li>
    @else 
        <li><a href="/products">Products</a></li>
        <li><a href="/products/create">Add a new product</a></li>
        <li><a href="/logout">Logout</a></li>
    @endif
</ul>

        

        <section class="pageTitle">
		<div class="container mx-auto">
            <h2>@yield('title')</h2>
		</div>
        </section>

        <section class="content">
		<div class="container mx-auto">
            @yield('content')
		</div>
        </section>
    </body>
</html>
