@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Tableau de bord</h1>
    </div>
    
    <!-- Stats Cards -->
    <div class="row">
        <div class="col-md-4">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-muted mb-0">Utilisateurs</h5>
                            <h2 class="mt-2 mb-0">{{ $stats['users'] }}</h2>
                        </div>
                        <div class="stats-icon text-primary">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <p class="mt-3 mb-0">
                        <a href="{{ route('admin.users.index') }}" class="text-decoration-none">
                            Voir tous les utilisateurs <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-muted mb-0">Catégories</h5>
                            <h2 class="mt-2 mb-0">{{ $stats['categories'] }}</h2>
                        </div>
                        <div class="stats-icon text-success">
                            <i class="fas fa-folder"></i>
                        </div>
                    </div>
                    <p class="mt-3 mb-0">
                        <a href="{{ route('admin.categories.index') }}" class="text-decoration-none">
                            Voir toutes les catégories <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-muted mb-0">Éléments</h5>
                            <h2 class="mt-2 mb-0">{{ $stats['items'] }}</h2>
                        </div>
                        <div class="stats-icon text-warning">
                            <i class="fas fa-list"></i>
                        </div>
                    </div>
                    <p class="mt-3 mb-0">
                        <a href="{{ route('admin.categories.index') }}" class="text-decoration-none">
                            Gérer les éléments <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <!-- Latest Users -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Derniers utilisateurs</h5>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-outline-primary">
                        Voir tous
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Rôle</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($latestUsers as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->is_admin)
                                                <span class="badge bg-primary">Admin</span>
                                            @else
                                                <span class="badge bg-secondary">Utilisateur</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
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
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Dernières catégories</h5>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-outline-primary">
                        Voir toutes
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Slug</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($latestCategories as $category)
                                    <tr>
                                        <td>
                                            @if ($category->icon)
                                                <i class="{{ $category->icon }} me-1"></i>
                                            @endif
                                            {{ $category->name }}
                                        </td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->created_at->format('d/m/Y') }}</td>
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
