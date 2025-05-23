<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Morocco 2030 World Cup Guide</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/star-navigation.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-VH45p3sk+AvqrsH1pjL3Z87WwJf1Wr2tA/Vi7F9M5wY=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        /* map */
    </style>
</head>

<body>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @php
        $stadiums = [
            ['name' => 'Stade Mohammed V', 'city' => 'Casablanca', 'lat' => 33.5883, 'lng' => -7.6114],
            ['name' => 'Stade de Marrakech', 'city' => 'Marrakech', 'lat' => 31.6258, 'lng' => -8.0345],
            ['name' => 'Stade Ibn Battouta', 'city' => 'Tanger', 'lat' => 35.7485, 'lng' => -5.8340],
            ['name' => 'Stade Adrar', 'city' => 'Agadir', 'lat' => 30.3928, 'lng' => -9.5479],
            ['name' => 'Complexe Moulay Abdellah', 'city' => 'Rabat', 'lat' => 34.0209, 'lng' => -6.8416],
            ['name' => 'Stade de Fès', 'city' => 'Fès', 'lat' => 34.0274, 'lng' => -5.0078],
        ];
    @endphp

    <!-- Your custom JS -->
    <script src="{{ asset('js/scripts.js') }}"></script>
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
                                <button type="submit" class="btn btn-danger btn-sm d-none d-md-inline-block "><i
                                        class="fas fa-sign-out-alt fa-lg"></i>Logout</button>
                            </form>
                        @endauth
                        <button class="btn d-md-none text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mobileMenu">
                            <i class="fas fa-bars fa-lg"></i>
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

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="position-absolute top-0 start-0 w-100 h-100">
                <video class="w-100 h-100 object-fit-cover opacity-30" autoplay>
                    <source src="{{ asset('images/Mo.mp4?height=1080&width=1920') }}" alt="Morocco Stadium"
                        type="video/mp4">
                </video>
            </div>
            <div class="container h-100 position-relative">
                <div class="d-flex flex-column justify-content-center align-items-center text-center text-white h-100">
                    <h1 class="display-4 fw-bold mb-4">Welcome to YourGuid</h1>
                    <p class="fs-4 mb-4 mx-auto" style="max-width: 800px;">Your comprehensive guide to the FIFA World
                        Cup 2030 in Morocco</p>
                    <div class="d-flex gap-3">
                        <a href="#categories" class="btn btn-success btn-lg rounded-pill">
                            Explore Guide
                        </a>
                        <a href="#map" class="btn btn-outline-light btn-lg rounded-pill">
                            View Map
                        </a>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4">
                <a href="#categories" class="text-white">
                    <i class="fas fa-chevron-down fa-3x bounce"></i>
                </a>
            </div>
        </section>

        <!-- Star Navigation -->
        <section id="categories" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold">Explore Morocco 2030</h2>
                <div class="star-navigation mx-auto position-relative">
                    <!-- Star Background -->
                    <div class="star-bg">
                        <div class="star-circle"></div>
                        <div class="star-lines"></div>
                    </div>

                    <!-- Center Star Button -->
                    <button id="center-star" class="center-star-btn">
                        <i class="fas fa-star fa-3x" style="color: #198754;"></i>
                    </button>
                    <!-- Category Buttons -->
                    <div class="category-buttons">
                        @foreach ($categories as $category)
                            <a href="{{ route(strtolower($category->slug)) }}" class="category-btn"
                                data-position="{{ $category->position ?? 0 }}">
                                <div class="category-icon">
                                    <i class="{{ $category->icon}} fa-3x"
                                    @php
                                        $arry = ['red', 'green', 'blue', 'yellow', 'orange', 'purple','black','pink','tomato','indigo','violet','navy'];
                                        $color = $arry[array_rand($arry)];
                                    @endphp
                                        style="color: {{ $color}};"></i>
                                </div>
                                <span>{{ $category->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section id="map" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold">Interactive Map</h2>
                <div class="map-container mb-3" id="stadium-map"></div>
                <p class="text-center text-muted">Explore host cities, stadiums, and attractions across Morocco.</p>
            </div>
        </section>

        <!-- Featured Section -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold">Featured Attractions</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/placeholder.svg?height=200&width=400&text=Stadiums') }}"
                                class="card-img-top" alt="World-Class Stadiums">
                            <div class="card-body">
                                <h5 class="card-title">World-Class Stadiums</h5>
                                <p class="card-text">Explore Morocco's state-of-the-art stadiums built for the 2030
                                    World Cup.</p>
                                <a href="{{ route('stadiums') }}" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/placeholder.svg?height=200&width=400&text=Culture') }}"
                                class="card-img-top" alt="Rich Cultural Heritage">
                            <div class="card-body">
                                <h5 class="card-title">Rich Cultural Heritage</h5>
                                <p class="card-text">Discover Morocco's unique blend of Arab, Berber, and European
                                    cultural influences.</p>
                                <a href="{{ route('culture') }}" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/placeholder.svg?height=200&width=400&text=Cuisine') }}"
                                class="card-img-top" alt="Moroccan Cuisine">
                            <div class="card-body">
                                <h5 class="card-title">Moroccan Cuisine</h5>
                                <p class="card-text">Taste the flavors of Morocco with traditional dishes like tagine,
                                    couscous, and mint tea.</p>
                                <a href="{{ route('culture') }}" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/placeholder.svg?height=200&width=400&text=Attractions') }}"
                                class="card-img-top" alt="Must-Visit Attractions">
                            <div class="card-body">
                                <h5 class="card-title">Must-Visit Attractions</h5>
                                <p class="card-text">From the Sahara Desert to the Atlas Mountains, explore Morocco's
                                    natural wonders.</p>
                                <a href="{{ route('attractions') }}" class="btn btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest News -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold mb-0">Latest News</h2>
                    <a href="{{ route('news') }}" class="btn btn-outline-success">View All News</a>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="/placeholder.svg?height=200&width=400&text=News+1" class="card-img-top"
                                alt="News 1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-success">Stadiums</span>
                                    <small class="text-muted">March 15, 2023</small>
                                </div>
                                <h5 class="card-title">Casablanca Stadium Construction Begins</h5>
                                <p class="card-text">Construction has officially begun on the flagship stadium for the
                                    2030 World Cup in Casablanca.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="/placeholder.svg?height=200&width=400&text=News+2" class="card-img-top"
                                alt="News 2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-primary">Transport</span>
                                    <small class="text-muted">March 10, 2023</small>
                                </div>
                                <h5 class="card-title">New High-Speed Rail Line Announced</h5>
                                <p class="card-text">Morocco announces plans for a new high-speed rail line connecting
                                    major World Cup host cities.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="/placeholder.svg?height=200&width=400&text=News+3" class="card-img-top"
                                alt="News 3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-warning">Hotels</span>
                                    <small class="text-muted">March 5, 2023</small>
                                </div>
                                <h5 class="card-title">Hotel Development Plan Unveiled</h5>
                                <p class="card-text">Morocco unveils comprehensive hotel development plan to accommodate
                                    World Cup visitors.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="py-5 bg-success text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="fw-bold mb-3">Stay Updated</h2>
                        <p class="mb-4">Subscribe to our newsletter for the latest updates on the Morocco 2030 World
                            Cup.</p>
                        <form class="row g-2 justify-content-center">
                            <div class="col-md-6">
                                <input type="email" class="form-control form-control-lg"
                                    placeholder="Your email address">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-light btn-lg text-success">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white py-5">
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
                            @foreach ($categories as $category)
                                <li class="mb-2"><a
                                        href="{{ route(strtolower($category->slug)) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fw-bold mb-3">Connect</h4>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-white" aria-label="Facebook">
                                <i class="fab fa-facebook fa-lg"></i>
                            </a>
                            <a href="#" class="text-white" aria-label="Twitter">
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                            <a href="#" class="text-white" aria-label="Instagram">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                            <a href="#" class="text-white" aria-label="YouTube">
                                <i class="fab fa-youtube fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-top border-secondary text-center text-white-50">
                    <p>&copy; {{ date('Y') }} Morocco 2030 World Cup Guide. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>


</body>