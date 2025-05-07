@extends('layouts.category')

@section('title', 'Transport')

@section('category_title', $category->name)
@section('category_subtitle', 'Navigate Morocco with ease during the 2030 World Cup')
@section('hero_image', asset('images/transport-icon.png?height=800&width=1600&text=Transport'))

@section('content')
  <!-- Introduction (unchanged) … -->

  <!-- Transportation Map -->
  <section class="mb-5">
    <h2 class="section-title">Transportation Map</h2>
    <div class="map-container mb-3" id="transport-map"></div>
    <p class="text-muted">Interactive map showing major transportation hubs across Morocco.</p>
  </section>

  <!-- Transportation Options -->
  <section class="mb-5">
    <h2 class="section-title">Transportation Options</h2>
    <div class="row g-4">
      @foreach($items as $item)
        <div class="col-md-6">
          <div class="card info-card h-100">
            @if($item->image)
              <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" alt="{{ $item->name }}">
            @else
              <img src="/placeholder.svg?height=300&width=600&text={{ urlencode($item->name) }}" class="card-img-top" alt="{{ $item->name }}">
            @endif
            <div class="card-body">
              <h3 class="card-title h5">{{ $item->name }}</h3>
              <p class="card-text">{{ $item->description }}</p>
              @if(!empty($item->details))
                <ul><a href=""></a>
                  @foreach($item->details as $detail)
                    <li>{{ $detail['key'] ?? '' }}: <a href="{{ $detail['value'] ?? '' }}" class="text-decoration-none btn btn-outline-primary mt-2"><i class="fas fa-link">Learn  More</i></a></li>
                  @endforeach
                </ul>
              @endif
              {{-- <a href="{{ $item->link ?? '#' }}" class="btn btn-outline-success mt-2">Learn More</a> --}}
            </div>
          </div>
        </div>
      @endforeach
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


