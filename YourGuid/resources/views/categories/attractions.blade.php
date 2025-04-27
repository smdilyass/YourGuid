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
                <p class="lead">Morocco offers a diverse range of attractions, from stunning natural landscapes to historic monuments and vibrant cities.</p>
                <p>While visiting for the 2030 World Cup, take the opportunity to explore Morocco's incredible attractions. From the majestic Atlas Mountains and vast Sahara Desert to ancient imperial cities and picturesque coastal towns, Morocco's diverse landscapes and rich history provide endless opportunities for exploration and adventure.</p>
            </div>
            <div class="col-md-4">
                <div class="card info-card">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Top Attractions</h5>
                        <ul class="mb-0">
                            <li>Sahara Desert - Experience the magic of the dunes</li>
                            <li>Atlas Mountains - Hike through breathtaking landscapes</li>
                            <li>Chefchaouen - Explore the famous blue city</li>
                            <li>Majorelle Garden - Visit Marrakech's iconic blue garden</li>
                            <li>Hassan II Mosque - Marvel at this architectural masterpiece</li>
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
            @include('partials.leaflet-map', ['locations' => $attractions])
        </div>
        <p class="text-muted">Interactive map showing major attractions across Morocco, with filters for different types of experiences.</p>
    </section>

    <!-- Featured Attractions -->
    <section class="mb-5">
        <h2 class="section-title">Featured Attractions</h2>
        <div class="row g-4">
            <!-- Sahara Desert -->
            <div class="col-md-6 col-lg-4">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Sahara+Desert" class="card-img-top" alt="Sahara Desert">
                    <div class="card-body">
                        <h3 class="card-title h5">Sahara Desert</h3>
                        <p class="card-text">Experience the magic of the Sahara Desert with its endless golden dunes, starlit skies, and traditional Berber camps. Camel treks, 4x4 adventures, and overnight stays in desert camps offer unforgettable experiences in this iconic landscape.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-warning">Natural Wonder</span>
                            <a href="#" class="btn btn-outline-success">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Atlas Mountains -->
            <div class="col-md-6 col-lg-4">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Atlas+Mountains" class="card-img-top" alt="Atlas Mountains">
                    <div class="card-body">
                        <h3 class="card-title h5">Atlas Mountains</h3>
                        <p class="card-text">The Atlas Mountains stretch across Morocco, offering spectacular scenery, traditional Berber villages, and excellent hiking opportunities. From day trips to multi-day treks, the mountains provide a refreshing contrast to Morocco's cities and desert.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-success">Outdoor Adventure</span>
                            <a href="#" class="btn btn-outline-success">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Chefchaouen -->
            <div class="col-md-6 col-lg-4">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Chefchaouen" class="card-img-top" alt="Chefchaouen">
                    <div class="card-body">
                        <h3 class="card-title h5">Chefchaouen</h3>
                        <p class="card-text">Known as the "Blue Pearl of Morocco," Chefchaouen is famous for its striking blue-washed buildings nestled in the Rif Mountains. This picturesque town offers a relaxed atmosphere, stunning mountain views, and a unique cultural experience.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-primary">Cultural Gem</span>
                            <a href="#" class="btn btn-outline-success">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Majorelle Garden -->
            <div class="col-md-6 col-lg-4">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Majorelle+Garden" class="card-img-top" alt="Majorelle Garden">
                    <div class="card-body">
                        <h3 class="card-title h5">Majorelle Garden</h3>
                        <p class="card-text">Located in Marrakech, the Majorelle Garden is a botanical garden and artist's landscape garden created by French painter Jacques Majorelle. Later owned by Yves Saint Laurent, this peaceful oasis features vibrant blue buildings, exotic plants, and the Berber Museum.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-info">Urban Oasis</span>
                            <a href="#" class="btn btn-outline-success">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Hassan II Mosque -->
            <div class="col-md-6 col-lg-4">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Hassan+II+Mosque" class="card-img-top" alt="Hassan II Mosque">
                    <div class="card-body">
                        <h3 class="card-title h5">Hassan II Mosque</h3>
                        <p class="card-text">This architectural masterpiece in Casablanca is one of the largest mosques in the world and the only mosque in Morocco open to non-Muslim visitors. Built partly on land and partly over the Atlantic Ocean, it features stunning craftsmanship and a 210-meter minaret.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-danger">Architectural Wonder</span>
                            <a href="#" class="btn btn-outline-success">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Ait Ben Haddou -->
            <div class="col-md-6 col-lg-4">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Ait+Ben+Haddou" class="card-img-top" alt="Ait Ben Haddou">
                    <div class="card-body">
                        <h3 class="card-title h5">Ait Ben Haddou</h3>
                        <p class="card-text">This UNESCO World Heritage site is a striking example of southern Moroccan architecture. The fortified village (ksar) consists of earthen buildings surrounded by high walls and has been featured in numerous films and TV shows, including Game of Thrones and Gladiator.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-secondary">Historic Site</span>
                            <a href="#" class="btn btn-outline-success">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="rounded-circle bg-success text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 12-8-10v18z"/><path d="M3 12h18"/><path d="m3 12 8-10v18z"/></svg>
                        </div>
                        <h5 class="card-title">Natural Wonders</h5>
                        <p class="card-text">From the Sahara Desert to the Atlas Mountains, Morocco's diverse landscapes offer breathtaking natural beauty and outdoor adventures.</p>
                        <a href="#" class="btn btn-outline-success">Explore Nature</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"/><path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"/><path d="M12 3v6"/></svg>
                        </div>
                        <h5 class="card-title">Historic Sites</h5>
                        <p class="card-text">Discover Morocco's rich history through its ancient ruins, imperial cities, and architectural treasures spanning centuries.</p>
                        <a href="#" class="btn btn-outline-success">Explore History</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="rounded-circle bg-warning text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><path d="M9 9h.01"/><path d="M15 9h.01"/></svg>
                        </div>
                        <h5 class="card-title">Cultural Experiences</h5>
                        <p class="card-text">Immerse yourself in Moroccan culture through traditional markets, artisan workshops, and authentic local experiences.</p>
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
                            <img src="/placeholder.svg?height=200&width=200&text=Essaouira" class="img-fluid rounded-start h-100 object-fit-cover" alt="Essaouira">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Essaouira from Marrakech</h5>
                                <p class="card-text">Visit the charming coastal town of Essaouira, known for its blue and white medina, historic port, and vibrant arts scene. Just a 2.5-hour drive from Marrakech.</p>
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
                            <img src="/placeholder.svg?height=200&width=200&text=Volubilis" class="img-fluid rounded-start h-100 object-fit-cover" alt="Volubilis">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Volubilis from Fes</h5>
                                <p class="card-text">Explore the ancient Roman ruins of Volubilis, a UNESCO World Heritage site featuring well-preserved mosaics and structures dating back to the 3rd century BC.</p>
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
                            <img src="/placeholder.svg?height=200&width=200&text=Asilah" class="img-fluid rounded-start h-100 object-fit-cover" alt="Asilah">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Asilah from Tangier</h5>
                                <p class="card-text">Visit the picturesque coastal town of Asilah, known for its whitewashed buildings, colorful murals, and relaxed atmosphere. Just 40 minutes from Tangier.</p>
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
                            <img src="/placeholder.svg?height=200&width=200&text=El+Jadida" class="img-fluid rounded-start h-100 object-fit-cover" alt="El Jadida">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">El Jadida from Casablanca</h5>
                                <p class="card-text">Discover the UNESCO-listed Portuguese city of El Jadida with its impressive cistern, fortified walls, and beautiful beaches. A 1.5-hour drive from Casablanca.</p>
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
        <p>Official World Cup tour packages will be available through the Morocco 2030 website and authorized travel partners. Early booking is recommended to secure your preferred experiences.</p>
    </section>
@endsection

@section('related_categories')
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('transport') }}" class="related-category">
            <div class="card text-center">
                <img src="/placeholder.svg?height=150&width=300&text=Transport" class="card-img-top" alt="Transport">
                <div class="card-body">
                    <div class="category-icon-large transport mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="10" rx="2"/><path d="M7 7v10"/><path d="M17 7v10"/></svg>
                    </div>
                    <h5 class="card-title">Transport</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('stadiums') }}" class="related-category">
            <div class="card text-center">
                <img src="/placeholder.svg?height=150&width=300&text=Stadiums" class="card-img-top" alt="Stadiums">
                <div class="card-body">
                    <div class="category-icon-large stadiums mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8v7a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8"/><path d="M21 4H3"/><path d="M12 4v16"/></svg>
                    </div>
                    <h5 class="card-title">Stadiums</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('hotels') }}" class="related-category">
            <div class="card text-center">
                <img src="/placeholder.svg?height=150&width=300&text=Hotels" class="card-img-top" alt="Hotels">
                <div class="card-body">
                    <div class="category-icon-large hotels mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14h18"/><path d="M3 8h18"/><path d="M3 18h18"/></svg>
                    </div>
                    <h5 class="card-title">Hotels</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('culture') }}" class="related-category">
            <div class="card text-center">
                <img src="/placeholder.svg?height=150&width=300&text=Culture" class="card-img-top" alt="Culture">
                <div class="card-body">
                    <div class="category-icon-large culture mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2v20"/><path d="M2 12h20"/></svg>
                    </div>
                    <h5 class="card-title">Culture</h5>
                </div>
            </div>
        </a>
    </div>
@endsection

@section('additional_js')
<script>
    // This would be replaced with actual map implementation
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Attractions map would be initialized here');
        // Initialize map with attraction locations
    });
</script>
@endsection

