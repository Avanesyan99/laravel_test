<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="\css\app.css"> -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-start">
            <button class="btn btn-outline-success me-2" type="button"><a class="nav-link" href="{{ route('main.index') }}">MAIN PAGE</a></button>
            <button class="btn btn-sm btn-outline-secondary me-2" type="button"><a class="nav-link" href="{{ route('post.index') }}">POSTS PAGE</a></button>
            <button class="btn btn-sm btn-outline-secondary me-2" type="button"><a class="nav-link" href="{{ route('product.index') }}">PRODUCTS PAGE</a></button>
            <button class="btn btn-sm btn-outline-secondary me-2" type="button"><a class="nav-link" href="{{ route('profile.index') }}">PROFILES PAGE</a></button>
            <button class="btn btn-sm btn-outline-secondary me-2" type="button"><a class="nav-link" href="{{ route('about.index') }}">ABOUT PAGE</a></button>
        </form>
    </nav>
    
    @yield('content')


</body>
</html>