@extends('layouts.category')

@section('title', 'Transport')

@section('category_title', 'Transport')
@section('category_subtitle', 'Navigate Morocco with ease during the 2030 World Cup')
@section('hero_image', 'images/transport-icon.png?height=800&width=1600&text=Transport')

@section('content')
    <!-- Introduction -->
    <section class="mb-5">
        <h2 class="section-title">Getting Around Morocco</h2>
        <div class="row">
            <div class="col-md-8">
                <p class="lead">Morocco offers a diverse range of transportation options to help you navigate the country during the 2030 World Cup.</p>
                <p>From modern high-speed trains to traditional taxis, you'll find convenient ways to travel between host cities and explore all that Morocco has to offer. This guide provides essential information on transportation options, tips for getting around, and how to make the most of your journey.</p>
            </div>
            <div class="col-md-4">
                <div class="card info-card">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Quick Tips</h5>
                        <ul class="mb-0">
                            <li>Book train tickets in advance during peak times</li>
                            <li>Use official taxis with meters</li>
                            <li>Consider the high-speed Al Boraq train for intercity travel</li>
                            <li>Download local ride-sharing apps before arrival</li>
                            <li>Carry small denominations of Moroccan Dirhams for taxis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Transportation Map -->
    <section class="mb-5">
        <h2 class="section-title">Transportation Map</h2>
        <div class="map-container mb-3" id="transport-map">
            <!-- Map will be loaded here via JavaScript -->
            <img src="/placeholder.svg?height=500&width=1200&text=Interactive+Transport+Map" alt="Transport Map" class="w-100 h-100 object-fit-cover">
        </div>
        <p class="text-muted">Interactive map showing major transportation hubs, train stations, airports, and bus terminals across Morocco's World Cup host cities.</p>
    </section>

    <!-- Transportation Options -->
    <section class="mb-5">
        <h2 class="section-title">Transportation Options</h2>
        <div class="row g-4">
            <!-- Trains -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Trains" class="card-img-top" alt="Moroccan Trains">
                    <div class="card-body">
                        <h3 class="card-title h5">Trains</h3>
                        <p class="card-text">Morocco's rail network is one of the best in Africa, with the high-speed Al Boraq train connecting Tangier to Casablanca in just over 2 hours. Regular trains also connect major cities including Rabat, Marrakech, and Fes.</p>
                        <h6 class="mt-3">Key Information:</h6>
                        <ul>
                            <li>First and second class options available</li>
                            <li>Advance booking recommended for World Cup period</li>
                            <li>Air conditioning on all intercity trains</li>
                            <li>Free WiFi on Al Boraq high-speed trains</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success mt-2">View Train Schedules</a>
                    </div>
                </div>
            </div>
            
            <!-- Buses -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Buses" class="card-img-top" alt="Moroccan Buses">
                    <div class="card-body">
                        <h3 class="card-title h5">Buses</h3>
                        <p class="card-text">Morocco has an extensive bus network with several companies offering intercity services. CTM and Supratours are the premium operators with comfortable, air-conditioned coaches connecting all major cities and many smaller towns.</p>
                        <h6 class="mt-3">Key Information:</h6>
                        <ul>
                            <li>CTM and Supratours offer the most reliable services</li>
                            <li>Online booking available for major routes</li>
                            <li>Buses often more economical than trains</li>
                            <li>Special World Cup shuttle services will be available</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success mt-2">View Bus Routes</a>
                    </div>
                </div>
            </div>
            
            <!-- Taxis -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Taxis" class="card-img-top" alt="Moroccan Taxis">
                    <div class="card-body">
                        <h3 class="card-title h5">Taxis</h3>
                        <p class="card-text">Two types of taxis operate in Morocco: petit taxis (small, city taxis) and grand taxis (larger, intercity taxis). Petit taxis are metered and can carry up to three passengers, while grand taxis have fixed prices and can carry up to six passengers.</p>
                        <h6 class="mt-3">Key Information:</h6>
                        <ul>
                            <li>Petit taxis are color-coded by city (e.g., blue in Casablanca)</li>
                            <li>Ensure the meter is used in petit taxis</li>
                            <li>Negotiate fare before entering grand taxis</li>
                            <li>Ride-sharing apps like Careem are available in major cities</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success mt-2">Taxi Safety Tips</a>
                    </div>
                </div>
            </div>
            
            <!-- Car Rental -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Car+Rental" class="card-img-top" alt="Car Rental in Morocco">
                    <div class="card-body">
                        <h3 class="card-title h5">Car Rental</h3>
                        <p class="card-text">Renting a car gives you the freedom to explore Morocco at your own pace. Major international rental companies operate in Morocco, alongside local providers. Roads between major cities are generally good, though driving in city centers can be challenging.</p>
                        <h6 class="mt-3">Key Information:</h6>
                        <ul>
                            <li>International driving permit recommended</li>
                            <li>Toll roads connect major cities</li>
                            <li>Fuel stations widely available</li>
                            <li>GPS navigation recommended</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success mt-2">Compare Rental Options</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stadium Transportation -->
    <section class="mb-5">
        <h2 class="section-title">Stadium Transportation</h2>
        <div class="alert alert-info">
            <h5 class="alert-heading">Special World Cup Services</h5>
            <p>During the 2030 World Cup, special transportation services will be available to and from all stadiums:</p>
            <ul class="mb-0">
                <li>Dedicated shuttle buses from city centers</li>
                <li>Extended metro and tram hours in cities with these services</li>
                <li>Park and ride facilities at major stadiums</li>
                <li>Fan zones with transport connections</li>
            </ul>
        </div>
        <p>More details on stadium-specific transportation will be available closer to the event. Match ticket holders will receive detailed transportation information with their tickets.</p>
    </section>

    <!-- Transportation Apps -->
    <section>
        <h2 class="section-title">Useful Transportation Apps</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </div>
                        <h5 class="card-title">ONCF Train App</h5>
                        <p class="card-text">Official app for Moroccan railways with schedules, booking, and real-time updates.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-sm btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
                                </svg>
                                iOS
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-dark">
                                <svg xmlns="http://www.w  class="btn btn-sm btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5H0v9zm13-8.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-6 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-6 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                    <path d="M2.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                                </svg>
                                Android
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                        </div>
                        <h5 class="card-title">Careem</h5>
                        <p class="card-text">Popular ride-hailing app available in major Moroccan cities with reliable service and upfront pricing.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-sm btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
                                </svg>
                                iOS
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5H0v9zm13-8.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-6 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-6 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                    <path d="M2.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                                </svg>
                                Android
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="rounded-circle bg-success text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                        <h5 class="card-title">Morocco 2030 Official App</h5>
                        <p class="card-text">The official World Cup app with transportation guides, real-time updates, and stadium navigation.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-sm btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
                                </svg>
                                iOS
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5H0v9zm13-8.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-6 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-6 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5-.5h-1a.5.5.5 0 0 1-.5-.5v-1z"/>
                                    <path d="M2.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5.5 0 0 0-.5-.5h-1z"/>
                                </svg>
                                Android
                            </a>
                        </div>
                    </div>
                </div>
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


@section('additional_js')
<script>
    // This would be replaced with actual map implementation
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Transport map would be initialized here');
        // Initialize map with transportation data
    });
</script>
@endsection

