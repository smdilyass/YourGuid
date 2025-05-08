@extends('layouts.category')

@section('title', 'Hotels')

@section('category_title', 'Hotels')

@section('category_subtitle', 'Find the perfect place to stay during the 2030 World Cup')

@section('hero_image', 'images/hotel.jpg?height=800&width=1600&text=Hotels')

@section('content')
    <!-- Introduction -->
    <section class="mb-5">

        <h2 class="section-title">Accommodation Options</h2>
        <div class="row">
            <div class="col-md-8">
                <p class="lead">Morocco offers a wide range of accommodation options to suit every preference and budget during the 2030 World Cup.</p>
                <p>From luxury hotels and traditional riads to budget-friendly hostels and vacation rentals, visitors will find comfortable places to stay throughout the tournament. This guide provides essential information on accommodation options in each host city, booking tips, and recommendations for the best places to stay.</p>
            </div>
            <div class="col-md-4">
                <div class="card info-card">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Booking Tips</h5>
                        <ul class="mb-0">
                            <li>Book accommodations well in advance</li>
                            <li>Consider location relative to stadiums and transport</li>
                            <li>Look for official World Cup partner hotels</li>
                            <li>Check cancellation policies carefully</li>
                            <li>Use the official Morocco 2030 booking platform</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hotel Search -->
    <section class="mb-5">
        <h2 class="section-title">Find Your Perfect Stay</h2>
        <div class="card mb-4">
            <div class="card-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="destination" class="form-label">Destination</label>
                            <select class="form-select" id="destination">
                                <option selected>All Cities</option>
                                <option>Casablanca</option>
                                <option>Rabat</option>
                                <option>Marrakech</option>
                                <option>Tangier</option>
                                <option>Agadir</option>
                                <option>Fes</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="check-in" class="form-label">Check-in</label>
                            <input type="date" class="form-control" id="check-in">
                        </div>
                        <div class="col-md-3">
                            <label for="check-out" class="form-label">Check-out</label>
                            <input type="date" class="form-control" id="check-out">
                        </div>
                        <div class="col-md-3">
                            <label for="guests" class="form-label">Guests</label>
                            <select class="form-select" id="guests">
                                <option selected>1 Adult</option>
                                <option>2 Adults</option>
                                <option>2 Adults, 1 Child</option>
                                <option>2 Adults, 2 Children</option>
                                <option>3 Adults</option>
                                <option>4 Adults</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Search Accommodations</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="map-container mb-3" id="hotel-map">
            {{-- @include('partials.leaflet-map', ['locations' => $items]) --}}
        </div>
        <p class="text-muted">Interactive map showing hotel locations across Morocco's World Cup host cities.</p>
    </section>

    <!-- Featured Accommodations -->
    <section class="mb-5">
        <h2 class="section-title">Featured Accommodations</h2>
        <div class="row g-4">
            @foreach($items as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card info-card h-100">
              <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                    <div class="card-body">
                        <h3 class="card-title h5">{{ $item->name }}</h3>
                        <p class="card-text">{{ $item->short_description }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-success">{{ $item->price_category ?? 'Premium' }}</span>
                            <a href="{{ route('categories.show', $item->slug) }}" class="btn btn-outline-success">View Options</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Accommodation by City -->
    <section class="mb-5">
        <h2 class="section-title">Accommodation by City</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/hotel.jpg?height=200&width=200&text=Casablanca" class="img-fluid rounded-start h-100 object-fit-cover" alt="Casablanca">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Casablanca</h5>
                                <p class="card-text">Morocco's largest city offers a wide range of accommodations from luxury beachfront hotels to boutique properties in the city center.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">View Hotels</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/hotel.jpg?height=200&width=200&text=Marrakech" class="img-fluid rounded-start h-100 object-fit-cover" alt="Marrakech">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Marrakech</h5>
                                <p class="card-text">Famous for its traditional riads and luxury resorts, Marrakech offers some of Morocco's most distinctive accommodation options.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">View Hotels</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/hotel.jpg?height=200&width=200&text=Rabat" class="img-fluid rounded-start h-100 object-fit-cover" alt="Rabat">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Rabat</h5>
                                <p class="card-text">The capital city features elegant hotels, boutique properties in the historic center, and modern apartments near the stadium.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">View Hotels</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/hotel.jpg?height=200&width=200&text=Tangier" class="img-fluid rounded-start h-100 object-fit-cover" alt="Tangier">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Tangier</h5>
                                <p class="card-text">This coastal city offers Mediterranean views from many hotels, with options ranging from international chains to charming guesthouses.</p>
                                <a href="#" class="btn btn-sm btn-outline-success">View Hotels</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="#" class="btn btn-success">View All Cities</a>
        </div>
    </section>

    <!-- Booking Information -->
    <section>
        <h2 class="section-title">Booking Information</h2>
        <div class="alert alert-info">
            <h5 class="alert-heading">Official World Cup Accommodation Platform</h5>
            <p>The official Morocco 2030 World Cup accommodation platform will launch in 2028, offering:</p>
            <ul class="mb-0">
                <li>Guaranteed rates and no hidden fees</li>
                <li>Verified properties near stadiums and transport hubs</li>
                <li>Flexible booking options for match ticket holders</li>
                <li>24/7 customer support in multiple languages</li>
                <li>Integrated transport information</li>
            </ul>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h5>Early Booking Recommendations</h5>
                <p>We recommend booking accommodation as soon as your travel plans are confirmed. Host cities will experience high demand during the tournament, particularly for properties near stadiums and in city centers.</p>
                <p>Early booking will provide the best selection and rates, especially for premium accommodations and properties in prime locations.</p>
            </div>
            <div class="col-md-6">
                <h5>Accommodation Packages</h5>
                <p>Official World Cup accommodation packages will be available, combining:</p>
                <ul>
                    <li>Hotel stays in preferred locations</li>
                    <li>Match tickets (subject to availability)</li>
                    <li>Transportation between cities</li>
                    <li>Optional tours and cultural experiences</li>
                </ul>
                <p>Sign up for the newsletter to be notified when packages become available.</p>
            </div>
        </div>
    </section>
@endsection

@section('related_categories')
    <div class="col-md-4 col-lg-2">
        <a href="{{ route('transport') }}" class="related-category">
            <div class="card text-center">
                <img src="images/transport-icon.png?height=150&width=300&text=Transport" class="card-img-top" alt="Transport">
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
                <img src="images/Attraction.jpeg?height=150&width=300&text=Attractions" class="card-img-top" alt="Attractions">
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



