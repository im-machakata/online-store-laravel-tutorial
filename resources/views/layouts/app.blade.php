<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>@yield('title','Online Store')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4 bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Onine Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle','A Laravel Store')</h2>
        </div>
    </header>
    <main class="container my-4">
        @yield('content')
    </main>
    <footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright of Isaac
                </small>
            </div>
        </div>
    </footer>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>