<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ရောက်တက်ရာရာ</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('front-asset/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front-asset/css/note.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand fw-bold text-primary" href="#">ရောက်တက်ရာရာ</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Books</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Knowledge</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Short Notes</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="bg-light border-top py-4 text-center text-secondary">© 2026 Ko Moe Htet</footer>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('front-asset/js/app.js')}}"></script>
        <script src="{{asset('front-asset/js/note.js')}}"></script>
    </body>
</html>