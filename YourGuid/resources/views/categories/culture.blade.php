@extends('layouts.category')

@section('title', 'Culture')

@section('category_title', 'Moroccan Culture')
@section('category_subtitle', 'Discover the rich cultural heritage of Morocco during the 2030 World Cup')
@section('hero_image', 'images/culture.jpg?height=800&width=1600&text=Moroccan+Culture')

@section('content')
    <!-- Introduction -->
    <section class="mb-5">
        <h2 class="section-title">Cultural Heritage</h2>
        <div class="row">
            <div class="col-md-8">
                <p class="lead">Morocco's rich cultural heritage reflects its unique position at the crossroads of Africa, Europe, and the Middle East.</p>
                <p>With influences from Berber, Arab, African, and European cultures, Morocco offers visitors a fascinating blend of traditions, architecture, cuisine, and arts. During the 2030 World Cup, visitors will have the opportunity to experience this cultural richness alongside the excitement of the tournament.</p>
            </div>
            <div class="col-md-4">
                <div class="card info-card">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Cultural Highlights</h5>
                        <ul class="mb-0">
                            <li>UNESCO World Heritage medinas</li>
                            <li>Traditional music and dance performances</li>
                            <li>Vibrant souks and marketplaces</li>
                            <li>Distinctive Moroccan cuisine</li>
                            <li>Ancient crafts and artisanal traditions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cultural Experiences -->
    <section class="mb-5">
        <h2 class="section-title">Cultural Experiences</h2>
        <div class="row g-4">
            <!-- Medinas -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Historic+Medinas" class="card-img-top" alt="Historic Medinas of Morocco">
                    <div class="card-body">
                        <h3 class="card-title h5">Historic Medinas</h3>
                        <p class="card-text">Morocco's ancient walled cities, or medinas, are living museums of Islamic urban planning and architecture. The medinas of Fes, Marrakech, Tetouan, and Essaouira are UNESCO World Heritage sites, featuring narrow winding streets, traditional houses, bustling souks, and historic monuments.</p>
                        <h6 class="mt-3">Must-Visit Medinas:</h6>
                        <ul>
                            <li><strong>Fes el Bali</strong> - The world's largest car-free urban area</li>
                            <li><strong>Marrakech Medina</strong> - Home to the famous Jemaa el-Fnaa square</li>
                            <li><strong>Tetouan Medina</strong> - Known for its Andalusian influence</li>
                            <li><strong>Essaouira Medina</strong> - A coastal gem with Portuguese fortifications</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success mt-2">Explore Medinas</a>
                    </div>
                </div>
            </div>
            
            <!-- Cuisine -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Moroccan+Cuisine" class="card-img-top" alt="Moroccan Cuisine">
                    <div class="card-body">
                        <h3 class="card-title h5">Moroccan Cuisine</h3>
                        <p class="card-text">Moroccan cuisine is renowned worldwide for its complex flavors, aromatic spices, and unique cooking techniques. A blend of Berber, Arabic, Andalusian, and Mediterranean influences, it offers a diverse range of dishes that reflect the country's rich cultural heritage.</p>
                        <h6 class="mt-3">Signature Dishes:</h6>
                        <ul>
                            <li><strong>Tagine</strong> - Slow-cooked stews named after the conical earthenware pots they're cooked in</li>
                            <li><strong>Couscous</strong> - Traditionally served on Fridays, often with vegetables and meat</li>
                            <li><strong>Pastilla</strong> - A sweet and savory pie typically made with pigeon or chicken</li>
                            <li><strong>Moroccan Mint Tea</strong> - The national drink, served with great ceremony</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success mt-2">Culinary Experiences</a>
                    </div>
                </div>
            </div>
            
            <!-- Crafts and Artisans -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Moroccan+Crafts" class="card-img-top" alt="Moroccan Crafts and Artisans">
                    <div class="card-body">
                        <h3 class="card-title h5">Crafts and Artisans</h3>
                        <p class="card-text">Morocco has a rich tradition of craftsmanship passed down through generations. Artisans across the country create intricate works using traditional techniques, from pottery and textiles to woodwork and metalwork.</p>
                        <h6 class="mt-3">Traditional Crafts:</h6>
                        <ul>
                            <li><strong>Ceramics</strong> - Particularly famous in Fes and Safi</li>
                            <li><strong>Carpet Weaving</strong> - Distinctive patterns from different regions</li>
                            <li><strong>Leather Working</strong> - Especially in Fes's ancient tanneries</li>
                            <li><strong>Metalwork</strong> - Intricate lanterns, teapots, and decorative items</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success mt-2">Artisan Workshops</a>
                    </div>
                </div>
            </div>
            
            <!-- Music and Festivals -->
            <div class="col-md-6">
                <div class="card info-card h-100">
                    <img src="/placeholder.svg?height=300&width=600&text=Music+and+Festivals" class="card-img-top" alt="Moroccan Music and Festivals">
                    <div class="card-body">
                        <h3 class="card-title h5">Music and Festivals</h3>
                        <p class="card-text">Morocco has a vibrant musical tradition and hosts numerous cultural festivals throughout the year. During the World Cup, special performances and events will showcase the country's diverse musical heritage.</p>
                        <h6 class="mt-3">Musical Traditions:</h6>
                        <ul>
                            <li><strong>Gnawa</strong> - Spiritual trance music with roots in sub-Saharan Africa</li>
                            <li><strong>Andalusian Classical</strong> - Sophisticated music with Spanish-Moorish origins</li>
                            <li><strong>Berber Folk</strong> - Traditional music of Morocco's indigenous people</li>
                            <li><strong>Chaabi</strong> - Popular music heard at celebrations and gatherings</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success mt-2">Cultural Events</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cultural Map -->
    <section class="mb-5">
        <h2 class="section-title">Cultural Heritage Map</h2>
        <div class="map-container mb-3" id="culture-map">
            <!-- Map will be loaded here via JavaScript -->
            <img src="/placeholder.svg?height=500&width=1200&text=Cultural+Heritage+Map" alt="Cultural Heritage Map" class="w-100 h-100 object-fit-cover">
        </div>
        <p class="text-muted">Interactive map showing important cultural sites, museums, and heritage locations across Morocco.</p>
    </section>

    <!-- World Cup Cultural Program -->
    <section class="mb-5">
        <h2 class="section-title">World Cup Cultural Program</h2>
        <div class="alert alert-info">
            <h5 class="alert-heading">Special Cultural Events</h5>
            <p>During the 2030 World Cup, Morocco will host a special cultural program showcasing the country's heritage:</p>
            <ul class="mb-0">
                <li>Cultural festivals in all host cities</li>
                <li>Traditional music and dance performances at fan zones</li>
                <li>Craft demonstrations and workshops</li>
                <li>Culinary experiences and food festivals</li>
                <li>Special exhibitions at museums and cultural centers</li>
            </ul>
        </div>
        <p>The official cultural program will be announced closer to the tournament, with events scheduled around match days to allow visitors to experience both football and Moroccan culture.</p>
    </section>

    <!-- Cultural Etiquette -->
    <section>
        <h2 class="section-title">Cultural Etiquette</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="/placeholder.svg?height=400&width=600&text=Cultural+Etiquette" alt="Moroccan Cultural Etiquette" class="img-fluid rounded shadow-sm mb-4 mb-md-0">
            </div>
            <div class="col-md-6">
                <h3 class="h5 mb-3">Respecting Local Customs</h3>
                <p>Morocco is a Muslim country with its own cultural norms and traditions. Understanding and respecting these customs will enhance your experience and show appreciation for the local culture.</p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <strong>Dress Modestly</strong> - Especially when visiting religious sites or traditional areas
                            </div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <strong>Ramadan Etiquette</strong> - Be mindful if your visit coincides with the holy month of Ramadan
                            </div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <strong>Greetings</strong> - Learn basic Arabic greetings as a sign of respect
                            </div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <strong>Photography</strong> - Always ask permission before photographing people
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" class="btn btn-outline-success mt-3">Cultural Etiquette Guide</a>
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
    // This would be replaced with actual map implementation
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Culture map would be initialized here');
        // Initialize map with cultural sites
    });
</script>
@endsection

