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
            @foreach($items as $item)
                <div class="col-md-6">
                    <div class="card info-card h-100">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                        @else
                            <img src="/placeholder.svg?height=300&width=600&text={{ urlencode($item->name) }}" class="card-img-top" alt="{{ $item->name }}">
                        @endif
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="card-title h5">{{ $item->name }}</h3>
                                @if(!empty($item->capacity))
                                    <span class="badge bg-success">Capacity: {{ $item->capacity }}</span>
                                @endif
                            </div>
                            <p class="card-text">{{ $item->description }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                @if(!empty($item->badges))
                                    <div>
                                        @foreach($item->badges as $badge)
                                            <span class="badge bg-primary me-1">{{ $badge }}</span>
                                        @endforeach
                                    </div>
                                @endif
                                <a href="#" class="btn btn-outline-success">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
