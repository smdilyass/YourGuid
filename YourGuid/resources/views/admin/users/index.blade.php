@extends('layouts.admin')

@section('title', 'Gestion des utilisateurs')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Gestion des utilisateurs</h1>
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">
            <i class="fas fa-plus me-1"></i> Nouvel utilisateur
        </a>
    </div>
    
    <div class="card bg-success">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="align-middle bg-success">id</th>
                            <th class="align-middle bg-success">Nom</th>
                            <th class="align-middle bg-success">Email</th>
                            <th class="align-middle bg-success">Rôle</th>
                            <th class="align-middle bg-success">Date d'inscription</th>
                            <th class="align-middle bg-success">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr class="align-middle">
                                <td class="align-middle bg-success text-white">{{ $user->id }}</td>
                                <td class="align-middle bg-success text-white">{{ $user->name }}</td>
                                <td class="align-middle bg-success text-white">{{ $user->email }}</td>
                                <td class="align-middle bg-success text-white">
                                    @if ($user->is_admin)
                                        <span class="badge bg-danger" title="that's me"><i class="fas fa-user-cog me-1"></i>Admin</span>
                                    @else
                                        <span class="badge bg-secondary">Utilisateur</span>
                                    @endif
                                </td>
                                <td class="align-middle bg-success text-white">{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                <td class="align-middle bg-success">
                                    <div class="d-flex gap-1">
                                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-primary btn-icon" title="Modifier">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        
                                        @if ($user->id !== auth()->id())
                                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger btn-icon" title="Supprimer">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">Aucun utilisateur trouvé</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
