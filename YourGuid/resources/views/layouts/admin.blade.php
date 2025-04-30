<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <!-- Custom CSS -->

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />

    @yield('additional_css')

</head>
<body>
    <div class="d-flex flex-column flex-lg-row min-vh-100">
        <!-- Sidebar -->
        <aside class="sidebar bg-dark text-white">
            <div class="sidebar-header p-3 text-center border-bottom">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="sidebar-logo mb-2" />
                <h5 class="mb-0">Admin Panel</h5>
            </div>
            <nav class="nav flex-column p-2">
                <a class="nav-link text-white py-2" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt me-2"></i> Tableau de bord
                </a>
                <a class="nav-link text-white py-2" href="{{ route('admin.users.index') }}">
                    <i class="fas fa-users me-2"></i> Utilisateurs
                </a>
                <a class="nav-link text-white py-2" href="{{ route('admin.categories.index') }}">
                    <i class="fas fa-folder me-2"></i> Catégories
                </a>
                <a class="nav-link text-white py-2" href="{{ route('admin.categories.index') }}">
                    <i class="fas fa-list me-2"></i> Éléments
                </a>
            </nav>
        </aside>

        <!-- Main content -->
        <div class="flex-grow-1 d-flex flex-column">
            <!-- Top navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2">
                <div class="container-fluid">
                    <button class="btn btn-dark d-lg-none" id="sidebar-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="ms-auto">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-sign-out-alt me-1"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <!-- Page content -->
            <main class="flex-grow-1 p-3">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebar-toggle')?.addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show-mobile');
        });
    </script>
    @yield('additional_js')
</body>
</html>