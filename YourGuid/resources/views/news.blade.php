@extends('layouts.app')

@section('title', 'News - Morocco 2030 World Cup Guide')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-red-700 to-red-900 text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-4 fw-bold mb-4">Latest News</h1>
                    <p class="lead">Stay updated with the latest developments for the 2030 FIFA World Cup in Morocco.</p>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <h5 class="card-title">Newsletter</h5>
                            <p class="card-text">Subscribe to receive the latest news directly to your inbox.</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Your email address">
                                </div>
                                <button type="submit" class="btn btn-success w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Categories -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="#" class="btn btn-outline-success active">All News</a>
                <a href="#" class="btn btn-outline-success">Stadiums</a>
                <a href="#" class="btn btn-outline-success">Transport</a>
                <a href="#" class="btn btn-outline-success">Hotels</a>
                <a href="#" class="btn btn-outline-success">Events</a>
                <a href="#" class="btn btn-outline-success">Teams</a>
                <a href="#" class="btn btn-outline-success">Tickets</a>
            </div>
        </div>
    </section>

    <!-- Featured News -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold mb-4">Featured News</h2>
            
            <div class="card mb-5 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/placeholder.svg?height=400&width=600&text=Featured+News" class="img-fluid rounded-start h-100 object-fit-cover" alt="Featured News">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-success">Stadiums</span>
                                <small class="text-muted">March 15, 2023</small>
                            </div>
                            <h3 class="card-title fw-bold">Casablanca Grand Stadium Design Unveiled</h3>
                            <p class="card-text lead">The official design for the flagship Casablanca Grand Stadium has been unveiled, showcasing a stunning blend of traditional Moroccan architecture and modern engineering.</p>
                            <p class="card-text">The 90,000-seat stadium will be the centerpiece of the 2030 World Cup, hosting both the opening match and the final. Construction is set to begin next month and will be completed by 2028, allowing for extensive testing before the tournament.</p>
                            <a href="#" class="btn btn-success">Read Full Article</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Latest News Grid -->
            <h2 class="fw-bold mb-4">Latest News</h2>
            <div class="row g-4">
                <!-- News Item 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=News+1" class="card-img-top" alt="News 1">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-success">Stadiums</span>
                                <small class="text-muted">March 15, 2023</small>
                            </div>
                            <h5 class="card-title">Casablanca Stadium Construction Begins</h5>
                            <p class="card-text">Construction has officially begun on the flagship stadium for the 2030 World Cup in Casablanca.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!-- News Item 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=News+2" class="card-img-top" alt="News 2">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-primary">Transport</span>
                                <small class="text-muted">March 10, 2023</small>
                            </div>
                            <h5 class="card-title">New High-Speed Rail Line Announced</h5>
                            <p class="card-text">Morocco announces plans for a new high-speed rail line connecting major World Cup host cities.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!-- News Item 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=News+3" class="card-img-top" alt="News 3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-warning">Hotels</span>
                                <small class="text-muted">March 5, 2023</small>
                            </div>
                            <h5 class="card-title">Hotel Development Plan Unveiled</h5>
                            <p class="card-text">Morocco unveils comprehensive hotel development plan to accommodate World Cup visitors.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!-- News Item 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=News+4" class="card-img-top" alt="News 4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-info">Events</span>
                                <small class="text-muted">March 1, 2023</small>
                            </div>
                            <h5 class="card-title">Cultural Festival to Coincide with World Cup</h5>
                            <p class="card-text">A nationwide cultural festival showcasing Moroccan heritage will run alongside the 2030 World Cup.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!-- News Item 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=News+5" class="card-img-top" alt="News 5">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-danger">Teams</span>
                                <small class="text-muted">February 25, 2023</small>
                            </div>
                            <h5 class="card-title">Qualification Process Announced</h5>
                            <p class="card-text">FIFA announces qualification process for the 48-team tournament at the 2030 World Cup.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!-- News Item 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=News+6" class="card-img-top" alt="News 6">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-secondary">Tickets</span>
                                <small class="text-muted">February 20, 2023</small>
                            </div>
                            <h5 class="card-title">Ticket Strategy Revealed</h5>
                            <p class="card-text">Morocco 2030 organizing committee reveals ticket pricing strategy and distribution plan.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Press Releases -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold mb-4">Official Press Releases</h2>
            
            <div class="list-group shadow-sm">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Morocco 2030 Organizing Committee Announces Key Milestones</h5>
                        <small class="text-muted">March 12, 2023</small>
                    </div>
                    <p class="mb-1">Official press release detailing the key milestones and timeline for World Cup preparations.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Sustainability Strategy for Morocco 2030</h5>
                        <small class="text-muted">March 5, 2023</small>
                    </div>
                    <p class="mb-1">Comprehensive sustainability strategy for the 2030 World Cup focusing on environmental and social impact.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">FIFA and Morocco Sign Host Agreement</h5>
                        <small class="text-muted">February 28, 2023</small>
                    </div>
                    <p class="mb-1">Official signing ceremony for the host agreement between FIFA and the Kingdom of Morocco.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Host Cities Confirmed for Morocco 2030</h5>
                        <small class="text-muted">February 15, 2023</small>
                    </div>
                    <p class="mb-1">Official announcement of the six host cities selected for the 2030 FIFA World Cup.</p>
                </a>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-success">View All Press Releases</a>
            </div>
        </div>
    </section>
@endsection

