@extends('layouts.app')

@section('title', 'Login - Morocco 2030 World Cup Guide')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0 fw-bold">Login</h4>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- @method("POST") --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">
                                    Login
                                </button>
                            </div>

                            <div class="text-center mt-3">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="text-center">
                            <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-success">Register</a></p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Login -->
                <div class="card mt-4 shadow">
                    <div class="card-body p-4">
                        <h5 class="card-title text-center mb-4">Or Login With</h5>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-outline-primary">
                                <i class="fab fa-facebook me-2"></i>
                                Continue with Facebook
                            </a>
                            <a href="#" class="btn btn-outline-danger">
                                <i class="fab fa-google me-2"></i>
                                Continue with Google
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

