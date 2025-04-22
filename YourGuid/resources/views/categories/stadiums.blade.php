@extends('layouts.category')

@section('title', 'Stadiums')

@section('category_title', 'World Cup Stadiums')
@section('category_subtitle', 'Explore Morocco\'s state-of-the-art venues for the 2030 FIFA World Cup')
@section('hero_image', 'images/stadium.avif?height=800&width=1600&text=Stadium')

@section('content')

    <!-- Introduction -->
    <section class="mb-5">
        <h2 class="section-title">Morocco's World Cup Venues</h2>
        <div class="row">
            <div class="col-md-8">
                <p class="lead">Morocco is preparing to host the 2030 FIFA World Cup with a collection of world-class stadiums across the country.</p>
                <p>From newly constructed architectural marvels to renovated historic venues, these stadiums will provide the perfect stage for the world's greatest football tournament. Each stadium has been designed with sustainability, accessibility, and fan experience in mind.</p>
            </div>
            <div class="col-md-4">
                <div class="card info-card">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Stadium Facts</h5>
                        <ul class="mb-0">
                            <li>6 host cities across Morocco</li>
                            <li>8 stadiums with capacities from 35,000 to 90,000</li>
                            <li>All stadiums meet FIFA's sustainability standards</li>
                            <li>Accessible facilities for all spectators</li>
                            <li>State-of-the-art technology and amenities</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stadium Map -->
    <section class="mb-5">
        <h2 class="section-title">Stadium Locations</h2>
       <div class="map-container mb-3" id="stadium-map"></div>

        <p class="text-muted">Interactive map showing all World Cup stadium locations across Morocco.</p>
    </section>
    <style>
    #stadium-map {
    height: 500px;
    width: 100%;
    border-radius: 12px;
    overflow: hidden;
}
</style>

    <!-- Featured Stadiums -->
    <section class="mb-5">
        <h2 class="section-title">Featured Stadiums</h2>
        <div class="row g-4">
            <!-- Casablanca Grand Stadium -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Casablanca+Grand+Stadium" class="card-img-top" alt="Casablanca Grand Stadium">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="card-title h5">Casablanca Grand Stadium</h3>
                            <span class="badge bg-success">Capacity: 90,000</span>
                        </div>
                        <p class="card-text">The crown jewel of Morocco's World Cup venues, this state-of-the-art stadium in Casablanca will host the opening match and the final. With its distinctive design inspired by traditional Moroccan architecture, it represents the perfect blend of cultural heritage and modern engineering.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="badge bg-primary me-1">Opening Match</span>
                                <span class="badge bg-danger">Final</span>
                            </div>
                            <a href="#" class="btn btn-outline-success">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Rabat National Stadium -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Rabat+National+Stadium" class="card-img-top" alt="Rabat National Stadium">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="card-title h5">Rabat National Stadium</h3>
                            <span class="badge bg-success">Capacity: 70,000</span>
                        </div>
                        <p class="card-text">Located in Morocco's capital city, the Rabat National Stadium combines cutting-edge technology with elegant design. The stadium features a retractable roof and is surrounded by extensive green spaces, making it a landmark venue for the tournament.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="badge bg-primary me-1">Group Matches</span>
                                <span class="badge bg-warning">Semi-Final</span>
                            </div>
                            <a href="#" class="btn btn-outline-success">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Marrakech Stadium -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Marrakech+Stadium" class="card-img-top" alt="Marrakech Stadium">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="card-title h5">Marrakech Stadium</h3>
                            <span class="badge bg-success">Capacity: 65,000</span>
                        </div>
                        <p class="card-text">Set against the backdrop of the Atlas Mountains, the Marrakech Stadium is a visual masterpiece. Its façade is inspired by traditional Moroccan patterns, and the stadium is powered by one of the largest solar installations in Africa, making it a model for sustainable sports venues.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="badge bg-primary me-1">Group Matches</span>
                                <span class="badge bg-info">Quarter-Final</span>
                            </div>
                            <a href="#" class="btn btn-outline-success">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tangier Ibn Battouta Stadium -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Tangier+Ibn+Battouta+Stadium" class="card-img-top" alt="Tangier Ibn Battouta Stadium">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="card-title h5">Tangier Ibn Battouta Stadium</h3>
                            <span class="badge bg-success">Capacity: 60,000</span>
                        </div>
                        <p class="card-text">Named after the famous Moroccan explorer, this stadium in Tangier offers spectacular views of the Mediterranean Sea. Its unique design resembles a ship's hull, paying homage to the city's maritime history. The stadium features advanced cooling systems and natural ventilation.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="badge bg-primary me-1">Group Matches</span>
                                <span class="badge bg-info">Round of 16</span>
                            </div>
                            <a href="#" class="btn btn-outline-success">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-success">View All Stadiums</a>
        </div>
    </section>

    <!-- Stadium Features -->
    <section class="mb-5">
        <h2 class="section-title">Stadium Features</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="rounded-circle bg-success text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v19"/><path d="M5 8h14"/><path d="M8 14h8"/><circle cx="12" cy="3" r="2"/></svg>
                        </div>
                        <h5 class="card-title">Sustainability</h5>
                        <p class="card-text">All stadiums incorporate sustainable design elements including solar power, rainwater harvesting, and energy-efficient systems. Materials have been sourced responsibly, and each venue has been designed to minimize environmental impact.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                        </div>
                        <h5 class="card-title">Technology</h5>
                        <p class="card-text">Cutting-edge technology enhances the fan experience with high-speed WiFi, digital wayfinding, cashless payment systems, and augmented reality features. Advanced security systems ensure safety while minimizing entry delays.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="rounded-circle bg-warning text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h5 class="card-title">Accessibility</h5>
                        <p class="card-text">All stadiums are fully accessible with dedicated seating areas, accessible restrooms, and barrier-free pathways. Audio description services, hearing loops, and sensory rooms ensure an inclusive experience for all fans.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stadium Experience -->
    <section>
        <h2 class="section-title">Stadium Experience</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="/placeholder.svg?height=400&width=600&text=Fan+Experience" alt="Stadium Fan Experience" class="img-fluid rounded shadow-sm mb-4 mb-md-0">
            </div>
            <div class="col-md-6">
                <h3 class="h5 mb-3">Enhanced Fan Experience</h3>
                <p>The 2030 World Cup stadiums have been designed with the fan experience as a top priority. From perfect sightlines to world-class amenities, every aspect has been carefully considered.</p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <strong>Premium Seating Options</strong> - Various seating categories including premium seats, boxes, and hospitality areas
                            </div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <strong>Food and Beverage</strong> - Diverse culinary options featuring Moroccan and international cuisine
                            </div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <strong>Fan Zones</strong> - Interactive areas with games, exhibits, and entertainment before and after matches
                            </div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <strong>Digital Experience</strong> - Mobile app integration for ticketing, navigation, and enhanced match information
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" class="btn btn-outline-success mt-3">Learn More About Fan Experience</a>
            </div>
        </div>
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
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('attractions') }}" class="related-category">
            <div class="card text-center">
                <img src="/placeholder.svg?height=150&width=300&text=Attractions" class="card-img-top" alt="Attractions">
                <div class="card-body">
                    <div class="category-icon-large attractions mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <h5 class="card-title">Attractions</h5>
                </div>
            </div>
        </a>
    </div>


    
@endsection

@section('additional_js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize the map
        var map = L.map('stadium-map').setView([31.7917, -7.0926], 6);


        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Stadiums data (you can later fetch this from Laravel)
        const stadiums = [
            { name: 'Stade Mohammed V', city: 'Casablanca', lat: 33.5883, lng: -7.6114 },
            { name: 'Stade de Marrakech', city: 'Marrakech', lat: 31.6258, lng: -8.0345 },
            { name: 'Stade Ibn Battouta', city: 'Tanger', lat: 35.7485, lng: -5.8340 },
            { name: 'Stade Adrar', city: 'Agadir', lat: 30.3928, lng: -9.5479 },
            { name: 'Complexe Moulay Abdellah', city: 'Rabat', lat: 34.0209, lng: -6.8416 },
            { name: 'Stade de Fès', city: 'Fès', lat: 34.0274, lng: -5.0078 }
        ];

        // Add markers to the map
        stadiums.forEach(stadium => {
            L.marker([stadium.lat, stadium.lng])
                .addTo(map)
                .bindPopup(`<strong>${stadium.name}</strong><br>${stadium.city}`);
        });
    });
</script>

@endsection

