@extends('layouts.admin')

@section('title', 'Éléments de la catégorie ' . $category->name)

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3">Éléments de la catégorie</h1>
            <h2 class="h5 text-muted">
                @if ($category->icon)
                    <i class="{{ $category->icon }} me-1"></i>
                @endif
                {{ $category->name }}
            </h2>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.categories.index' ) }} " class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i> Retour aux catégories
            </a>
            <a href="{{ route('admin.categories.items.create', $category) }}" class="btn btn-success">
                <i class="fas fa-plus me-1"></i> Nouvel élément
            </a>
        </div> 
    </div>
    
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Slug</th>
                            <th>Date de création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                    @else
                                        <div class="bg-light d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="fas fa-image text-muted"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>   
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{ route('admin.categories.items.edit',  $item) }}" class="btn btn-sm btn-outline-primary btn-icon" title="Modifier">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.categories.items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-sm btn-outline-danger btn-icon" title="Supprimer">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">Aucun élément trouvé dans cette catégorie</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $items->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

