<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#3e97b5">
    <title>@yield('title', 'HereNOW Help – Help When and Where You Need It')</title>
    <meta name="description" content="@yield('description', 'HereNOW Help – The most holistic & personalized platform for total mental health treatment. Healthcare. Veterans. Students. Employers.')">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- HereNOW Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/hnh-style.css') }}">

    @yield('head')
</head>
<body>

<!-- ============================================================
     HEADER / NAVBAR
============================================================ -->
<div id="header">
    <nav id="main-nav" class="navbar navbar-expand-md hover-menu bg-tra fixed-top white-scroll navbar-light">
        <div class="container">
            <!-- Logo (black version — shown when scrolled) -->
            <a href="{{ route('home') }}" class="navbar-brand logo-black" rel="home">
                <img src="https://herenowhelp.com/wp-content/uploads/2019/09/HereNOW-Logo480x120.png"
                     width="125" height="30" alt="HereNOW Help">
            </a>
            <!-- Logo (white version — shown on hero) -->
            <a href="{{ route('home') }}" class="navbar-brand logo-white" rel="home">
                <img src="https://herenowhelp.com/wp-content/uploads/2019/09/HereNOW-Logo480x120-white.png"
                     width="125" height="30" alt="HereNOW Help">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarMain" aria-controls="navbarMain"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-bar-icon"><i class="fas fa-bars"></i></span>
            </button>

            <!-- Navigation Links -->
            <div id="navbarMain" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto align-items-md-center">

                    <!-- Schedule Demo -->
                    <li class="nav-item">
                        <a class="nav-link schedule-demo" href="{{ route('home') }}#Contact">Schedule Demo</a>
                    </li>

                    <!-- Who We Serve -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Who We Serve</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://herenowhelp.com/veterans/">Veterans</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/students/">Students</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/employee/">Employees</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/rehab/">Rehab Centers</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/government/">Government</a>
                        </div>
                    </li>

                    <!-- PeerNOW Academy -->
                    <li class="nav-item">
                        <a class="nav-link" href="https://herenowhelp.com/peernow/">PeerNOW Academy</a>
                    </li>

                    <!-- About -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">About</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://herenowhelp.com/about-2/our-story/">Our Story</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/about-2/our-vision/">Our Vision</a>
                            <a class="dropdown-item" href="https://herenowhelp.com/our-team/">Our Team</a>
                            <a class="dropdown-item" href="{{ route('home') }}#Contact">Contact</a>
                            <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Resources</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://herenowhelp.com/mental-health-news/">Mental Health News</a>
                                <a class="dropdown-item" href="https://herenowhelp.com/peer-counseling/">Peer Counseling</a>
                                <a class="dropdown-item" href="https://herenowhelp.com/helpful-links/">Helpful Links</a>
                                <a class="dropdown-item" href="https://herenowhelp.com/support/">Support</a>
                            </div>
                        </div>
                    </li>

                    <!-- Customer Portal -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Customer Portal</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://production.herenowhelp.com/login">Login</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- ============================================================
     PAGE CONTENT
============================================================ -->
<div id="page" class="page">
    @yield('content')
</div>

<!-- ============================================================
     FOOTER
============================================================ -->
<footer id="footer">
    <div class="container">
        <div class="footer-inner">
            <p>&copy; 2024 HereNOW Help, Inc. All Rights Reserved</p>
        </div>
    </div>
</footer>

<!-- jQuery, Popper, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<!-- Navbar scroll behaviour -->
<script>
(function() {
    var nav = document.getElementById('main-nav');
    function onScroll() {
        if (window.scrollY > 60) {
            nav.classList.add('scrolled');
            nav.classList.remove('bg-tra');
        } else {
            nav.classList.remove('scrolled');
            nav.classList.add('bg-tra');
        }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();
</script>

<!-- Smooth scroll to anchor -->
<script>
document.querySelectorAll('a[href*="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
        var href = this.getAttribute('href');
        var hash = href.indexOf('#') !== -1 ? href.split('#')[1] : null;
        if (hash) {
            var target = document.getElementById(hash);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    });
});
</script>

@yield('scripts')
</body>
</html>
