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

    <!-- Cultural Experiences with Images -->
    <section class="mb-5">
        <h2 class="section-title">Cultural Experiences</h2>
        <div class="row">
            <div class="col-md-8">
                <!-- Main Image Display -->
                <div class="main-image-container mb-3">
                    <img src="/placeholder.svg?height=500&width=800&text=Harira" class="img-fluid rounded w-100" alt="Harira">
                </div>
                <div class="h4 mb-2">Harira</div>
                <div class="mb-4">Traditional Moroccan soup served especially during Ramadan, made with tomatoes, lentils, chickpeas, and aromatic spices.</div>
            </div>
            <div class="col-md-4">
                <!-- Cultural Items List -->
                <div class="cultural-items-list">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Traditional Moroccan Cuisine
                        </div>
                        <div class="list-group list-group-flush">
                            @php
                            $dishes = [
                                [
                                    'title' => 'Harira',
                                    'subtitle' => 'Traditional soup',
                                    'description' => 'Traditional Moroccan soup served especially during Ramadan, made with tomatoes, lentils, chickpeas, and aromatic spices.'
                                ],
                                [
                                    'title' => 'Tanjia',
                                    'subtitle' => 'Marrakech specialty',
                                    'description' => 'A Marrakech specialty slow-cooked in a clay pot, typically made with tender meat, preserved lemon, and a blend of spices.'
                                ],
                                [
                                    'title' => 'Rfissa',
                                    'subtitle' => 'Chicken with lentils',
                                    'description' => 'A festive dish made with shredded msemen (Moroccan pancakes), chicken, lentils, and a fragrant blend of spices including fenugreek.'
                                ],
                                [
                                    'title' => 'Mrouzia',
                                    'subtitle' => 'Sweet lamb tagine',
                                    'description' => 'A sweet and savory tagine traditionally prepared during Eid al-Adha, featuring lamb, honey, raisins, and aromatic spices like cinnamon and saffron.'
                                ]
                            ];
                            @endphp

                            @foreach($dishes as $dish)
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                <img src="/placeholder.svg?height=60&width=80&text={{ $dish['title'] }}" class="rounded me-3" width="80" height="60" alt="{{ $dish['title'] }}">
                                <div>
                                    <h3 class="h6 mb-0">{{ $dish['title'] }}</h3>
                                    <small class="text-muted">{{ $dish['subtitle'] }}</small>
                                </div>
                            </a>
                            @endforeach
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
