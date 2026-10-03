<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yout Tet Yar Yar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="{{asset('front-asset/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front-asset/css/note.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light shadow">
            <div class="container">
                <h2><i class="fa-solid fa-feather-pointed text-warning"></i></h2>
                <a class="navbar-brand text-dark" href="{{route('front-index')}}">
                    <div class="waviy">
                        <span style="--i:5"></span>
                        <span style="--i:1">Y</span>
                        <span style="--i:2">o</span>
                        <span style="--i:3">u</span>
                        <span style="--i:4">t</span>
                        <span style="--i:5"></span>
                        <span style="--i:6">T</span>
                        <span style="--i:7">e</span>
                        <span style="--i:8">t</span>
                        <span style="--i:9"></span>
                        <span style="--i:10">Y</span>
                        <span style="--i:11">a</span>
                        <span style="--i:12">r</span>
                        <span style="--i:13"></span>
                        <span style="--i:10">Y</span>
                        <span style="--i:11">a</span>
                        <span style="--i:12">r</span>
                    </div>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse wave" id="nav">
                    <ul class="navbar-nav ms-auto">
                        <h5 class="nav-item"><a class="nav-link active" href="https://t.me/MoeHtetr" target="_blank"><i class="fa-brands fa-telegram"></i></a></h5>
                        <h5 class="nav-item"><a class="nav-link" href="https://github.com/MoeHtetr" target="_blank"><i class="fa-brands fa-github text-dark"></i></a></h5>
                        <h5 class="nav-item"><a class="nav-link" href="https://www.tiktok.com/@moehtet_moehtet?_r=1&_t=ZS-9ADOxqgSJFc" target="_blank"><i class="fa-brands fa-tiktok text-danger"></i></a></h5>
                        <h5 class="nav-item"><a class="nav-link" href="https://www.facebook.com/share/14pQM6nwMvx/" target="_blank"><i class="fa-brands fa-facebook text-primary"></i></a></h5>
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