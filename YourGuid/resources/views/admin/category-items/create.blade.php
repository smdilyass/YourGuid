@extends('layouts.admin')

@section('title', 'Ajouter un élément à ' . $category->name)

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3">Ajouter un élément</h1>
            <h2 class="h5 text-muted">
                @if ($category->icon)
                    <i class="{{ $category->icon }} me-1"></i>
                @endif
                {{ $category->name }}
            </h2>
        </div>
        <a href="{{ route('admin.categories.items.index', $category) }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Retour
        </a>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.categories.items.store', $category) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    <div class="form-text">Format recommandé: JPG, PNG. Taille max: 6 Mo.</div>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label class="form-label">Détails supplémentaires</label>
                    
                    <div id="details-container">
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
                    </div>
                    
                    <button type="button" class="btn btn-outline-secondary btn-sm mt-2" id="add-detail">
                        <i class="fas fa-plus me-1"></i> Ajouter un détail
                    </button>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Enregistrer
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
        let detailIndex = 0;
        
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
            if (detailIndex === 1) {
                document.querySelector('.remove-detail').disabled = false;
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

