@extends('layouts.admin')

@section('title', 'Modifier un élément')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3">Modifier un élément</h1>
            <h2 class="h5 text-muted">
                @if ($category->icon)
                    <i class="{{ $category->icon }} me-1"></i>
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
            <form action="{{ route('admin.categories.items.update', [$category, $item]) }}" method="POST" enctype="multipart/form-data">
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
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $item->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    
                    @if ($item->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="img-thumbnail" style="max-height: 200px;">
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

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const detailsContainer = document.getElementById('details-container');
        const addDetailBtn = document.getElementById('add-detail');
        let detailIndex = {{ is_array($item->details) ? count($item->details) - 1 : 0 }};
        
        // Fonction pour ajouter une nouvelle ligne de détail
        addDetailBtn.addEventListener('click', function() {
            detailIndex++;
            
            const detailRow = document.createElement('div');
            detailRow.className = 'row mb-2 detail-row';
            detailRow.innerHTML = `
                <div class="col-md-5">
                    <input type="text" class="form-control" name="details[${detailIndex}][key]" placeholder="Clé (ex: Adresse, Téléphone)">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="details[${detailIndex}][value]" placeholder="Valeur">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-outline-danger remove-detail">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            
            detailsContainer.appendChild(detailRow);
            
            // Activer le bouton de suppression de la première ligne si nécessaire
            const removeButtons = document.querySelectorAll('.remove-detail');
            if (removeButtons.length > 1) {
                removeButtons.forEach(button => {
                    button.disabled = false;
                });
            }
        });
        
        // Supprimer une ligne de détail
        detailsContainer.addEventListener('click', function(e) {
            if (e.target.closest('.remove-detail')) {
                const row = e.target.closest('.detail-row');
                row.remove();
                
                // Réindexer les champs
                const rows = document.querySelectorAll('.detail-row');
                rows.forEach((row, index) => {
                    const keyInput = row.querySelector('input[name*="[key]"]');
                    const valueInput = row.querySelector('input[name*="[value]"]');
                    
                    keyInput.name = `details[${index}][key]`;
                    valueInput.name = `details[${index}][value]`;
                });
                
                detailIndex = rows.length - 1;
                
                // Désactiver le bouton de suppression de la première ligne s'il n'y a qu'une seule ligne
                if (rows.length === 1) {
                    document.querySelector('.remove-detail').disabled = true;
                }
            }
        });
    });
</script>
@endsection
@endsection
