@extends('layouts.category')

@section('title', $category->name ?? 'Category')

@section('category_title', $category->name ?? 'Category')
@section('category_subtitle', $category->description ?? '')
@section('hero_image', $category->image ?? 'images/default-category-hero.jpg')

@section('content')
    @if($category->items && $category->items->count() > 0)
        @foreach($category->items->sortBy('display_order') as $item)
            <section class="mb-5">
                <h2 class="section-title">{{ $item->name }}</h2>
                @if($item->image)
                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="img-fluid mb-3">
                @endif
                <p>{!! $item->description !!}</p>
                @if($item->details)
                    <div>
                        <h5>Details:</h5>
                        <pre>{{ json_encode(json_decode($item->details), JSON_PRETTY_PRINT) }}</pre>
                    </div>
                @endif
            </section>
        @endforeach
    @else
        <p>No detailed information available for this category yet.</p>
    @endif
@endsection

@section('related_categories')
    <div class="row g-4">
        <div class="col-md-4 col-lg-2">
            <a href="{{ route('categories.show', 'stadiums') }}" class="related-category">
                <div class="card text-center">
                    <img src="/placeholder.svg?height=150&width=300&text=Stadiums" class="card-img-top" alt="Stadiums">
                    <div class="card-body">
                        <h5 class="card-title">Stadiums</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-lg-2">
            <a href="{{ route('categories.show', 'hotels') }}" class="related-category">
                <div class="card text-center">
                    <img src="/placeholder.svg?height=150&width=300&text=Hotels" class="card-img-top" alt="Hotels">
                    <div class="card-body">
                        <h5 class="card-title">Hotels</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-lg-2">
            <a href="{{ route('categories.show', 'culture') }}" class="related-category">
                <div class="card text-center">
                    <img src="/placeholder.svg?height=150&width=300&text=Culture" class="card-img-top" alt="Culture">
                    <div class="card-body">
                        <h5 class="card-title">Culture</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-lg-2">
            <a href="{{ route('categories.show', 'attractions') }}" class="related-category">
                <div class="card text-center">
                    <img src="/placeholder.svg?height=150&width=300&text=Attractions" class="card-img-top"
                        alt="Attractions">
                    <div class="card-body">
                        <h5 class="card-title">Attractions</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection