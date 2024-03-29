<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet" >

    <title>Laravel</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/create">Add image</a></li>
                <li class="nav-item"><a class="nav-link" href="/page">Page</a></li>
                <li class="nav-item"><a class="nav-link" href="/validate">Validate</a></li>
                <li class="nav-item"><a class="nav-link" href="/page/middleware">Middleware</a></li>
                <li class="nav-item"><a class="nav-link" href="/404">404</a></li>
                <li class="nav-item"><a class="nav-link" href="/collections">Collections</a></li>
                <li class="nav-item"><a class="nav-link" href="/log-in">Log-in</a></li>
                <li class="nav-item"><a class="nav-link" href="/page_admin">page_admin</a></li>
                <li class="nav-item"><a class="nav-link" href="/eloquent">eloquent</a></li>
                <li class="nav-item"><a class="nav-link" href="/posts">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="/new_post">New_post</a></li>
                <li class="nav-item"><a class="nav-link" href="/edit_post">Edit_post</a></li>
            </ul>
        </div>
    </div>
</nav>


@yield('content')
<hr>
<hr>
@yield('sidebar')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
