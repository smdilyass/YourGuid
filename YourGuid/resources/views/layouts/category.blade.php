<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Morocco 2030 World Cup Guide</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stadium-detail.css') }}" rel="stylesheet">
    @yield('additional_css')
    <style>
        /* Navbar link hover star */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link.active,
        .nav-link:hover {
            color: rgb(33, 169, 83) !important;
            /* Bootstrap warning color */
        }

        .nav-link.active::after,
        .nav-link:hover::after {
            content: "\f005";
            /* Font Awesome star unicode */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            top: 50%;
            right: -20px;
            transform: translateY(-50%);
            color: rgb(33, 169, 83);
            font-size: 0.8rem;
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .nav-link::after {
            opacity: 0;
        }
    </style>
    @yield('additional_css')
</head>

<body>
    <div class="min-vh-100 bg-white">
        <!-- Countdown Timer -->
        <div class="countdown-timer">
            <div class="countdown-inner">
                <div class="countdown-segment">
                    <div class="countdown-value" id="days">00</div>
                    <div class="countdown-label">Days</div>
                </div>
                <div class="countdown-segment">
                    <div class="countdown-value" id="hours">00</div>
                    <div class="countdown-label">Hrs</div>
                </div>
                <div class="countdown-segment">
                    <div class="countdown-value" id="minutes">00</div>
                    <div class="countdown-label">Min</div>
                </div>
                <div class="countdown-segment">
                    <div class="countdown-value" id="seconds">00</div>
                    <div class="countdown-label">Sec</div>
                </div>
            </div>
        </div>
        <!-- Header -->
        <header class="header-bg">
            <div class="container py-1">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ asset('images/logo.png?height=50&width=50') }}" alt="Morocco 2030 Logo"
                            class="logo-img">
                        <h1 class="h4 text-white mb-0 fw-bold"><span class="text-success">Your</span><span
                                class="text-danger" style="font-family: 'Permanent Marker',cursive;">Guide</h1>
                    </div>
                    <nav class="d-none d-md-flex gap-5">
                        <a href="{{ route('home') }}"
                            class="nav-link text-white text-decoration-none {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about') }}"
                            class="nav-link text-white text-decoration-none {{ Request::routeIs('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('news') }}"
                            class="nav-link text-white text-decoration-none {{ Request::routeIs('news') ? 'active' : '' }}">News</a>
                        <a href="{{ route('contact') }}"
                            class="nav-link text-white text-decoration-none {{ Request::routeIs('contact') ? 'active' : '' }}">Contact</a>
                    </nav>
                    <div class="d-flex gap-2">
                        @guest
                            <a href="{{ route('login') }}"
                                class="btn btn-outline-success btn-sm text-white d-none d-md-inline-block">Login</a>
                            <a href="{{ route('register') }}"
                                class="btn btn-success btn-sm text-black d-none d-md-inline-block">Register</a>
                        @endguest
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm d-none d-md-inline-block"><i
                                        class="fas fa-sign-out-alt fa-lg"></i>Logout</button>
                            </form>
                        @endauth
                        <button class="btn d-md-none text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mobileMenu">
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile Menu -->
        <div class="collapse" id="mobileMenu">
            <div class="bg-dark p-4">
                <nav class="d-flex flex-column gap-3">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a>
                    <a href="{{ route('about') }}" class="text-white text-decoration-none">About</a>
                    <a href="{{ route('news') }}" class="text-white text-decoration-none">News</a>
                    <a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a>
                    <div class="d-flex gap-2 mt-3">
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-light btn-sm text-danger">Register</a>
                        @endguest
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                            </form>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>

        <!-- Category Hero Banner -->
        <section class="category-hero" style="background-image: url('@yield('hero_image')')">
            <div class="category-hero-overlay"></div>
            <div class="container position-relative h-100 d-flex align-items-center">
                <div class="text-white">
                    <h1 class="display-4 fw-bold">@yield('category_title')</h1>
                    <p class="lead">@yield('category_subtitle')</p>
                </div>
            </div>
        </section>

        <!-- Category Navigation -->
        <div class="bg-light py-3 border-bottom">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="categoryDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Other Categories
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="{{ route('transport') }}">Transport</a></li>
                            <li><a class="dropdown-item" href="{{ route('stadiums') }}">Stadiums</a></li>
                            <li><a class="dropdown-item" href="{{ route('hotels') }}">Hotels</a></li>
                            <li><a class="dropdown-item" href="{{ route('culture') }}">Culture</a></li>
                            <li><a class="dropdown-item" href="{{ route('attractions') }}">Attractions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="py-5">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <!-- Related Categories -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4 fw-bold">Explore Other Categories</h2>
                <div class="row g-4 justify-content-center">
                    @yield('related_categories')
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-success text-white py-5">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-3">
                        <h3 class="fs-4 fw-bold mb-3">Morocco 2030</h3>
                        <p class="text-white-50">Your comprehensive guide to the FIFA World Cup 2030 in Morocco.</p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fw-bold mb-3">Quick Links</h4>
                        <ul class="list-unstyled footer-links">
                            <li class="mb-2"><a href="{{ route('home') }}">Home</a></li>
                            <li class="mb-2"><a href="{{ route('about') }}">About</a></li>
                            <li class="mb-2"><a href="{{ route('news') }}">News</a></li>
                            <li class="mb-2"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fw-bold mb-3">Categories</h4>
                        <ul class="list-unstyled footer-links">
                            <li class="mb-2"><a href="{{ route('transport') }}">Transport</a></li>
                            <li class="mb-2"><a href="{{ route('stadiums') }}">Stadiums</a></li>
                            <li class="mb-2"><a href="{{ route('hotels') }}">Hotels</a></li>
                            <li class="mb-2"><a href="{{ route('culture') }}">Culture</a></li>
                            <li class="mb-2"><a href="{{ route('attractions') }}">Attractions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fw-bold mb-3">Connect</h4>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-white" aria-label="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                </svg>
                            </a>
                            <a href="#" class="text-white" aria-label="Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                                </svg>
                            </a>
                            <a href="#" class="text-white" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                </svg>
                            </a>
                            <a href="#" class="text-white" aria-label="YouTube">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                                    <path d="m10 15 5-3-5-3z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-top border-success-dark text-center text-white-50">
                    <p>&copy; {{ date('Y') }} Morocco 2030 World Cup Guide. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    @yield('additional_js')
</body>

</html>