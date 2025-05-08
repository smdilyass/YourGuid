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

