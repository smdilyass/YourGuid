@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')
<div class="container-fluid px-0">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Tableau de bord</h1>
    </div>
    
    <!-- Stats Cards -->
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body bg-success py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title text-muted mb-0">Utilisateurs</h6>
                            <h2 class="mt-2 mb-0">{{ $stats['users'] ?? 0 }}</h2>
                        </div>
                        <div class="stats-icon bg-success rounded-circle p-3 text-danger">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-outline-danger mt-3">
                        Voir tous <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body bg-danger py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title text-muted mb-0">Catégories</h6>
                            <h2 class="mt-2 mb-0">{{ $stats['categories'] ?? 0 }}</h2>
                        </div>
                        <div class="stats-icon bg-darker rounded-circle p-3 text-success">
                            <i class="fas fa-folder"></i>
                        </div>
                    </div>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-outline-success mt-3">
                        Voir toutes <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body bg-success py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title text-muted mb-0">Éléments</h6>
                            <h2 class="mt-2 mb-0">{{ $stats['items'] ?? 0 }}</h2>
                        </div>
                        <div class="stats-icon bg-success rounded-circle p-3 text-danger">
                            <i class="fas fa-list"></i>
                        </div>
                    </div>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-outline-danger mt-3">
                        Gérer <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row g-3 mt-1">
        <!-- Latest Users -->
        <div class="col-md-6">
            <div class="card border-0 bg-success shadow-sm">
                <div class="card-header bg-success d-flex justify-content-between align-items-center py-2">
                    <h5 class="card-title mb-0">Derniers utilisateurs</h5>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-outline-danger">
                        Voir tous
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive ">
                        <table class="table table-hover  align-middle mb-0">
                            <thead class="table-success">
                                <tr>
                                    <th class="py-2">Nom</th>
                                    <th class="py-2">Email</th>
                                    <th class="py-2">Rôle</th>
                                    <th class="py-2">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($latestUsers as $user)
                                    <tr>
                                        <td class="py-2 bg-success">{{ $user->name }}</td>
                                        <td class="py-2 bg-danger">{{ $user->email }}</td>
                                        <td class="py-2 bg-success">
                                            @if ($user->is_admin)
                                                <span class="badge bg-danger"><i class="fas fa-user-cog me-1"></i>Admin</span>
                                            @else
                                                <span class="badge bg-primary"><i class="fas fa-user me-1"></i>Utilisateur</span>
                                            @endif
                                        </td>
                                        <td class="py-2 bg-success">{{ $user->created_at->format('d/m/Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-3">Aucun utilisateur trouvé</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Latest Categories -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success d-flex justify-content-between align-items-center py-2">
                    <h5 class="card-title mb-0">Dernières catégories</h5>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-outline-danger">
                        Voir toutes
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-success">
                                <tr>
                                    <th class="py-2">Nom</th>
                                    <th class="py-2">Slug</th>
                                    <th class="py-2">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($latestCategories as $category)
                                    <tr>
                                        <td class="py-2 bg-danger">
                                            @if ($category->icon)
                                                <i class="{{ $category->icon }} me-1"></i>
                                            @endif
                                            {{ $category->name }}
                                        </td>
                                        <td class="py-2 bg-success">{{ $category->slug }}</td>
                                        <td class="py-2 bg-danger">{{ $category->created_at->format('d/m/Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-3">Aucune catégorie trouvée</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
