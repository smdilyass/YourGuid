@extends('layouts.category')

@section('title', 'Attractions')

@section('category_title', 'Must-Visit Attractions')
@section('category_subtitle', 'Explore Morocco\'s natural wonders and iconic landmarks during the 2030 World Cup')
@section('hero_image', 'images/attraction1.jpg?height=800&width=1600&text=Moroccan+Attractions')

@section('content')
    <!-- Introduction -->
    <section class="mb-5">
        <h2 class="section-title">Discover Morocco</h2>
        <div class="row">
            <div class="col-md-8">
                <p class="lead">Morocco offers a diverse range of attractions, from stunning natural landscapes to historic
                    monuments and vibrant cities.</p>
                <p>While visiting for the 2030 World Cup, take the opportunity to explore Morocco's incredible attractions.
                    From the majestic Atlas Mountains and vast Sahara Desert to ancient imperial cities and picturesque
                    coastal towns, Morocco's diverse landscapes and rich history provide endless opportunities for
                    exploration and adventure.</p>
            </div>
            <div class="col-md-4">
                <div class="card info-card">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Top Attractions</h5>
                        <ul class="mb-0">
                            @foreach($items as $item)
                                <li>{{ $item->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Attractions Map -->
    <section class="mb-5">
        <h2 class="section-title">Attractions Map</h2>
        <div class="map-container mb-3" id="attractions-map">
        </div>
        <p class="text-muted">Interactive map showing major attractions across Morocco, with filters for different types of
            experiences.</p>
    </section>

    <!-- Featured Attractions -->
    <section class="mb-5">
        <h2 class="section-title">Featured Attractions</h2>
        <div class="row g-4">
            @foreach($items as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card info-card h-100">
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : '?height=300&width=600&text=' . $item->name }}"
                            class="card-img-top" alt="{{ $item->name }}">
                        <div class="card-body">
                            <h3 class="card-title h5">{{ $item->name }}</h3>
                            <p class="card-text">
                                {{ is_array($item->description) ? implode(', ', $item->description) : $item->description }}</p>
                            @if(!empty($item->details) && is_array($item->details))
                                <ul>
                                    @foreach($item->details as $detail)
                                        <li>{{ is_array($detail) ? implode(', ', $detail) : $detail }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-secondary">Attraction</span>
                                <a href="#" class="btn btn-outline-success">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-success">View All Attractions</a>
        </div>
    </section>

    <!-- Attraction Categories -->
    <section class="mb-5">
        <h2 class="section-title">Explore by Category</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="rounded-circle bg-success text-white d-inline-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fas fa-wand-magic-sparkles fa-2x"></i>
                        </div>
                        <h5 class="card-title">Natural Wonders</h5>
                        <p class="card-text">From the Sahara Desert to the Atlas Mountains, Morocco's diverse landscapes
                            offer breathtaking natural beauty and outdoor adventures.</p>
                        <a href="#" class="btn btn-outline-success">Explore Nature</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fas fa-landmark fa-2x"></i>
                        </div>
                        <h5 class="card-title">Historic Sites</h5>
                        <p class="card-text">Discover Morocco's rich history through its ancient ruins, imperial cities, and
                            architectural treasures spanning centuries.</p>
                        <a href="#" class="btn btn-outline-success">Explore History</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="rounded-circle bg-warning text-white d-inline-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fas fa-face-smile fa-2x"></i>
                        </div>
                        <h5 class="card-title">Cultural Experiences</h5>
                        <p class="card-text">Immerse yourself in Moroccan culture through traditional markets, artisan
                            workshops, and authentic local experiences.</p>
                        <a href="#" class="btn btn-outline-success">Explore Culture</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Day Trips -->
    <section class="mb-5">
        <h2 class="section-title">Day Trips from Host Cities</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/MarToS.webp?height=200&width=200&text=Essaouira"
                                class="img-fluid rounded-start h-100 object-fit-cover" alt="Essaouira">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Essaouira from Marrakech</h5>
                                <p class="card-text">Visit the charming coastal town of Essaouira, known for its blue and
                                    white medina, historic port, and vibrant arts scene. Just a 2.5-hour drive from
                                    Marrakech.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/fes.jpg?height=200&width=200&text=Volubilis"
                                class="img-fluid rounded-start h-100 object-fit-cover" alt="Volubilis">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Volubilis from Fes</h5>
                                <p class="card-text">Explore the ancient Roman ruins of Volubilis, a UNESCO World Heritage
                                    site featuring well-preserved mosaics and structures dating back to the 3rd century BC.
                                </p>
                                <a href="#" class="btn btn-sm btn-outline-success">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/DayToTangier.webp?height=200&width=200&text=Asilah"
                                class="img-fluid rounded-start h-100 object-fit-cover" alt="Asilah">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Asilah from Tangier</h5>
                                <p class="card-text">Visit the picturesque coastal town of Asilah, known for its whitewashed
                                    buildings, colorful murals, and relaxed atmosphere. Just 40 minutes from Tangier.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/ElJadida.jpg?height=200&width=200&text=El+Jadida"
                                class="img-fluid rounded-start h-100 object-fit-cover" alt="El Jadida">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">El Jadida from Casablanca</h5>
                                <p class="card-text">Discover the UNESCO-listed Portuguese city of El Jadida with its
                                    impressive cistern, fortified walls, and beautiful beaches. A 1.5-hour drive from
                                    Casablanca.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="#" class="btn btn-success">View All Day Trips</a>
        </div>
    </section>

    <!-- World Cup Special Tours -->
    <section>
        <h2 class="section-title">World Cup Special Tours</h2>
        <div class="alert alert-info">
            <h5 class="alert-heading">Special Tour Packages</h5>
            <p>During the 2030 World Cup, special tour packages will be available for visitors:</p>
            <ul class="mb-0">
                <li>Match day tours combining game tickets with local attractions</li>
                <li>Multi-city packages following your team's journey</li>
                <li>Cultural experiences scheduled around match days</li>
                <li>Family-friendly tours with activities for all ages</li>
                <li>Adventure packages combining World Cup matches with outdoor experiences</li>
            </ul>
        </div>
        <p>Official World Cup tour packages will be available through the Morocco 2030 website and authorized travel
            partners. Early booking is recommended to secure your preferred experiences.</p>
    </section>
@endsection


@section('related_categories')
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('transport') }}" class="related-category">
            <div class="card text-center">
                <img src="images/transport-icon.png?height=150&width=300&text=Transport" class="card-img-top"
                    alt="Transport">
                <div class="card-body">
                    <div class="category-icon-large transport mx-auto">
                        <i class="fas fa-bus fa-2x text-white"></i>
                    </div>
                    <h5 class="card-title">Transport</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('stadiums') }}" class="related-category">
            <div class="card text-center">
                <img src="images/stadium.avif?height=150&width=300&text=Stadiums" class="card-img-top" alt="Stadiums">
                <div class="card-body">
                    <div class="category-icon-large stadiums mx-auto">
                        <i class="fas fa-home fa-2x text-white"></i>
                    </div>
                    <h5 class="card-title">Stadiums</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('culture') }}" class="related-category">
            <div class="card text-center">
                <img src="images/culture.jpg?height=150&width=300&text=Culture" class="card-img-top" alt="Culture">
                <div class="card-body">
                    <div class="category-icon-large culture mx-auto">
                        <i class="fas fa-globe fa-2x text-white"></i>
                    </div>
                    <h5 class="card-title">Culture</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('attractions') }}" class="related-category">
            <div class="card text-center">
                <img src="images/Attraction.jpeg?height=150&width=300&text=Attractions" class="card-img-top"
                    alt="Attractions">
                <div class="card-body">
                    <div class="category-icon-large attractions mx-auto">
                        <i class="fas fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <h5 class="card-title">Attractions</h5>
                </div>
            </div>
        </a>
    </div>
@endsection


@section('additional_js')
    <script>
        // This would be replaced with actual map implementation
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Attractions map would be initialized here');
            // Initialize map with attraction locations
        });
    </script>
@endsection