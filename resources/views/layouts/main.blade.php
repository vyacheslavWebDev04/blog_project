<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный блог</title>
    <base href="{{ asset('/') }}">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/aos/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{route('main.index')}}"><img src="assets/images/logo.svg" alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
{{--                    <li class="nav-item">--}}
{{--                        --}}
{{--                    </li>--}}
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item mr-3">
                        @auth()
                            <button class=" container btn btn" style="background-color:#2e937a">
                                <a style="color: white" class="nav-link bg-transparent" href="{{route('personal.main.index')}}">Личный кабинет</a>
                            </button>
                        @endauth
                        @guest()
                                <button class="container btn btn " style="background-color:#2e937a" >
                                    <a style="color: white" class="nav-link bg-transparent" href="{{route('personal.main.index')}}">Войти</a>
                                </button>
                        @endguest
                    </li>
                    @auth()
                        @if(auth()->user()->role !== 1)
                    <li class="nav-item">
                        <button class=" container btn btn " style="background-color:#2e937a">
                            <a style="color: white" class="nav-link bg-transparent" href="{{route('admin.main.index')}}">Админка</a>
                        </button>
                    </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title"></h1>
            <div class="banner-btns-wrapper">
        </div>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="index.html" class="footer-brand-wrapper">
                    <img src="assets/images/logo.svg" alt="edica logo">
                </a>
                <p class="contact-details">ablazeyang@yandex.ru</p>
                <p class="contact-details">...</p>
                <nav class="footer-social-links">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
{{--                <nav class="footer-nav">--}}
{{--                    <a href="#!" class="nav-link">Company</a>--}}
{{--                    <a href="#!" class="nav-link">Android App</a>--}}
{{--                    <a href="#!" class="nav-link">ios App</a>--}}
{{--                    <a href="#!" class="nav-link">Blog</a>--}}
{{--                    <a href="#!" class="nav-link">Partners</a>--}}
{{--                    <a href="#!" class="nav-link">Careers</a>--}}
{{--                </nav>--}}
            </div>
            <div class="col-md-3">
{{--                <nav class="footer-nav">--}}
{{--                    <a href="#!" class="nav-link">FAQ</a>--}}
{{--                    <a href="#!" class="nav-link">Reporting</a>--}}
{{--                    <a href="#!" class="nav-link">Block Storage</a>--}}
{{--                    <a href="#!" class="nav-link">Tools & Integrations</a>--}}
{{--                    <a href="#!" class="nav-link">API</a>--}}
{{--                    <a href="#!" class="nav-link">Pricing</a>--}}
{{--                </nav>--}}
            </div>
            <div class="col-md-3">
{{--                <div class="dropdown footer-country-dropdown">--}}
{{--                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown"--}}
{{--                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i--}}
{{--                            class="fas fa-chevron-down ml-2"></i>--}}
{{--                    </button>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">--}}
{{--                        <button class="dropdown-item" href="#">--}}
{{--                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States--}}
{{--                        </button>--}}
{{--                        <button class="dropdown-item" href="#">--}}
{{--                            <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="footer-bottom-content">
{{--            <nav class="nav footer-bottom-nav">--}}
{{--                <a href="#!">Privacy & Policy</a>--}}
{{--                <a href="#!">Terms</a>--}}
{{--                <a href="#!">Site Map</a>--}}
{{--            </nav>--}}
            <p class="mb-0">© Edica. 2024  Все права защищены
                </p>
        </div>
    </div>
</footer>
<script src="assets/vendors/popper.js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendors/aos/aos.js"></script>
<script src="assets/js/main.js"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
