<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#3e97b5">
    <title>@yield('title', 'HereNOW Help – Help When and Where You Need It')</title>
    <meta name="description" content="@yield('description', 'The most holistic & personalized platform for total mental health treatment. Healthcare. Veterans. Students. Employers.')">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- HereNOW Styles -->
    <link rel="stylesheet" href="{{ asset('css/hnh-style.css') }}?v={{ filemtime(public_path('css/hnh-style.css')) }}">

    @yield('head')
</head>
<body>

<!-- ── NAVBAR ──────────────────────────────────────────────────────────── -->
<div id="header">
    <nav id="main-nav" class="navbar navbar-expand-md">
        <div class="container">

            <a href="{{ route('home') }}" class="navbar-brand logo-dark">
                <img src="{{ asset('images/logo-dark.png') }}" width="125" height="30" alt="HereNOW Help">
            </a>
            <a href="{{ route('home') }}" class="navbar-brand logo-light">
                <img src="{{ asset('images/logo-white.png') }}" width="125" height="30" alt="HereNOW Help">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarMain" aria-controls="navbarMain"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars"></i></span>
            </button>

            <div id="navbarMain" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto align-items-md-center">

                    <li class="nav-item">
                        <a class="nav-link schedule-demo" href="#Contact">Schedule Demo</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Who We Serve</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://herenowhelp.com/veterans/">Veterans</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/students/">Students</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/employee/">Employees</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/rehab/">Rehab Centers</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/government/">Government</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://herenowhelp.com/peernow/">PeerNOW Academy</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://herenowhelp.com/about-2/our-story/">Our Story</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/about-2/our-vision/">Our Vision</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/our-team/">Our Team</a>
                            <a class="dropdown-item" href="#Contact">Contact</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://herenowhelp.com/mental-health-news/">Mental Health News</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/peer-counseling/">Peer Counseling</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/helpful-links/">Helpful Links</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/support/">Support</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Customer Portal</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://production.herenowhelp.com/login">Login</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- ── CONTENT ─────────────────────────────────────────────────────────── -->
<div id="page">
    @yield('content')
</div>

<!-- ── FOOTER ──────────────────────────────────────────────────────────── -->
<footer id="footer">
    <div class="container">
        <p class="footer-copy">&copy; 2024 HereNOW Help, Inc. All Rights Reserved</p>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<script>
// Navbar scroll behaviour
(function () {
    var nav = document.getElementById('main-nav');
    function update() {
        if (window.scrollY > 55) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    }
    window.addEventListener('scroll', update, { passive: true });
    update();
})();

// Smooth-scroll all #anchor links
document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
        var id = this.getAttribute('href').replace('#', '');
        var el = document.getElementById(id);
        if (el) {
            e.preventDefault();
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Mark select as filled when changed
document.querySelectorAll('select.form-control').forEach(function (s) {
    s.addEventListener('change', function () {
        this.classList.toggle('filled', this.value !== '');
    });
});
</script>

@yield('scripts')
</body>
</html>
