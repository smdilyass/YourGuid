@extends('layouts.app')

@section('title', 'About - Morocco 2030 World Cup Guide')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-red-700 to-red-900 text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold mb-4">About Morocco 2030</h1>
                    <p class="lead">Your comprehensive guide to the FIFA World Cup 2030 in Morocco.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/logo.png?height=400&width=600&text=Morocco+2030" alt="Morocco 2030" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Our Mission</h2>
                    <p class="lead">To provide visitors with the most comprehensive and accurate information about the 2030 FIFA World Cup in Morocco.</p>
                    <p>The Morocco 2030 World Cup Guide is dedicated to helping fans, tourists, and visitors navigate the excitement of the tournament with ease. Our platform offers detailed information on stadiums, transportation, accommodation, cultural experiences, and attractions throughout Morocco.</p>
                    
                    <div class="my-5">
                        <h3 class="fw-bold mb-3">About the 2030 World Cup</h3>
                        <p>The 2030 FIFA World Cup will be a historic event for Morocco and the African continent. As the second World Cup to be held in Africa, Morocco aims to showcase its rich culture, modern infrastructure, and warm hospitality to the world.</p>
                        <p>The tournament will feature 48 teams competing across 8 state-of-the-art stadiums in 6 host cities. With an expected attendance of over 3 million spectators and a global television audience of billions, Morocco 2030 promises to be a celebration of football and cultural exchange.</p>
                    </div>
                    
                    <div class="my-5">
                        <h3 class="fw-bold mb-3">Our Team</h3>
                        <p>The Morocco 2030 World Cup Guide is created by a diverse team of experts in tourism, sports, and Moroccan culture. Our contributors include:</p>
                        <ul>
                            <li>Local tourism professionals with deep knowledge of Morocco's regions</li>
                            <li>Sports journalists specializing in football and international tournaments</li>
                            <li>Cultural experts who can provide authentic insights into Moroccan traditions</li>
                            <li>Travel specialists with experience in major sporting events</li>
                        </ul>
                        <p>Together, we are committed to providing accurate, up-to-date, and useful information to enhance your World Cup experience.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Key Facts</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex">
                                    <span class="fw-bold me-2">Host Country:</span> Morocco
                                </li>
                                <li class="list-group-item d-flex">
                                    <span class="fw-bold me-2">Tournament Dates:</span> June 8 - July 8, 2030
                                </li>
                                <li class="list-group-item d-flex">
                                    <span class="fw-bold me-2">Teams:</span> 48
                                </li>
                                <li class="list-group-item d-flex">
                                    <span class="fw-bold me-2">Host Cities:</span> 6
                                </li>
                                <li class="list-group-item d-flex">
                                    <span class="fw-bold me-2">Stadiums:</span> 8
                                </li>
                                <li class="list-group-item d-flex">
                                    <span class="fw-bold me-2">Expected Visitors:</span> 3+ million
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Host Cities</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Casablanca</li>
                                <li class="list-group-item">Rabat</li>
                                <li class="list-group-item">Marrakech</li>
                                <li class="list-group-item">Tangier</li>
                                <li class="list-group-item">Agadir</li>
                                <li class="list-group-item">Fes</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Contact Us</h3>
                            <p>Have questions or suggestions? We'd love to hear from you!</p>
                            <a href="{{ route('contact') }}" class="btn btn-success w-100">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Road to Morocco 2030</h2>
            
            <div class="position-relative">
                <!-- Timeline Line -->
                <div class="position-absolute" style="top: 0; bottom: 0; left: 50%; width: 2px; background-color: #198754;"></div>
                
                <!-- Timeline Items -->
                <div class="row g-4">
                    <div class="col-md-6 text-end">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">2023</h5>
                                <p class="card-text">Morocco awarded hosting rights for the 2030 FIFA World Cup</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">2024-2025</h5>
                                <p class="card-text">Stadium construction begins across host cities</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 text-end">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">2026-2027</h5>
                                <p class="card-text">Infrastructure development including transportation networks and accommodation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">2028</h5>
                                <p class="card-text">Completion of major stadiums and test events begin</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 text-end">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">2029</h5>
                                <p class="card-text">Final preparations and rehearsals for tournament operations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100 border-success">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-success">June 8, 2030</h5>
                                <p class="card-text">Opening ceremony and first match of the 2030 FIFA World Cup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
   
@endsection
