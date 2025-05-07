@extends('layouts.admin')

@section('title', 'Modifier un élément')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3">Modifier un élément</h1>
            <h2 class="h5 text-muted">
                @if ($category->icon)
                    <img src="{{ asset('storage/' . $category->icon) }}" alt="Icon" class="me-2" style="height: 24px;">
                @endif
                {{ $category->name }} / {{ $item->name }}
            </h2>
        </div>
        <a href="{{ route('admin.categories.items.index', $category) }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Retour
        </a>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.categories.items.update', $item) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $item->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description', $item->description) }}</textarea>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $item->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    
                    @if ($item->image)
                        <div class="mb-2">
                            @if (file_exists(public_path('storage/' . $item->image)))
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="img-thumbnail" style="max-height: 200px;">
                            @else
                                <img src="{{ asset('images/fallback-image.png') }}" alt="Fallback Image" class="img-thumbnail" style="max-height: 200px;">
                            @endif
                        </div>
                    @endif
                    
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    <div class="form-text">Format recommandé: JPG, PNG. Taille max: 2 Mo. Laissez vide pour conserver l'image actuelle.</div>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label class="form-label">Détails supplémentaires</label>
                    
                    <div id="details-container">
                        @if(is_array($item->details) && count($item->details) > 0)
                            @foreach($item->details as $index => $detail)
                                <div class="row mb-2 detail-row">
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="details[{{ $index }}][key]" value="{{ $detail['key'] ?? '' }}" placeholder="Clé (ex: Adresse, Téléphone)">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="details[{{ $index }}][value]" value="{{ $detail['value'] ?? '' }}" placeholder="Valeur">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-outline-danger remove-detail" {{ count($item->details) <= 1 ? 'disabled' : '' }}>
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="row mb-2 detail-row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="details[0][key]" placeholder="Clé (ex: Adresse, Téléphone)">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="details[0][value]" placeholder="Valeur">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-danger remove-detail" disabled>
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        @endif
                    </div>
                    
                    <button type="button" class="btn btn-outline-secondary btn-sm mt-2" id="add-detail">
                        <i class="fas fa-plus me-1"></i> Ajouter un détail
                    </button>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
