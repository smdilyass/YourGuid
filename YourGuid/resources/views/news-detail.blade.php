@extends('layouts.app')

@section('title', 'Casablanca Grand Stadium Design Unveiled - Morocco 2030 World Cup Guide')

@section('additional_css')
<link href="{{ asset('css/stadium-detail.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Article Hero -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="badge bg-success">Stadiums</span>
                        <span class="text-muted">March 15, 2023</span>
                    </div>
                    <h1 class="display-5 fw-bold mb-4">Casablanca Grand Stadium Design Unveiled</h1>
                    <p class="lead">The official design for the flagship Casablanca Grand Stadium has been unveiled, showcasing a stunning blend of traditional Moroccan architecture and modern engineering.</p>
                    <div class="d-flex align-items-center mt-4 author-info">
                        <img src="/placeholder.svg?height=50&width=50" alt="Author" class="rounded-circle author-image">
                        <div>
                            <p class="fw-bold mb-0">Ahmed Benali</p>
                            <p class="text-muted small mb-0">Sports Architecture Correspondent</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Article Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <img src="/placeholder.svg?height=500&width=800&text=Stadium+Design+Rendering" alt="Casablanca Grand Stadium Design" class="img-fluid rounded mb-4 shadow-sm">
                    
                    <div class="article-content">
                        <p>The Morocco 2030 World Cup Organizing Committee has officially unveiled the design for the Casablanca Grand Stadium, which will serve as the centerpiece venue for the tournament. The 90,000-seat stadium will host both the opening match and the final of the 2030 FIFA World Cup.</p>
                        
                        <p>Designed by a collaborative team of Moroccan and international architects, the stadium's distinctive exterior features a façade inspired by traditional Moroccan zellige tilework, with intricate geometric patterns that create a stunning visual effect, especially when illuminated at night.</p>
                        
                        <h2 class="fw-bold mt-5 mb-3">Architectural Marvel</h2>
                        
                        <p>The stadium's design represents a perfect blend of Moroccan cultural heritage and cutting-edge architectural innovation. The exterior façade draws inspiration from traditional Moroccan geometric patterns, while the partially retractable roof is designed to resemble a traditional Moroccan tent structure.</p>
                        
                        <p>"We wanted to create a stadium that is unmistakably Moroccan, while also pushing the boundaries of what's possible in stadium design," said lead architect Fatima El Mansouri. "The Casablanca Grand Stadium will be a symbol of Morocco's rich cultural heritage and its forward-looking vision."</p>
                        
                        <div class="row g-3 my-4">
                            <div class="col-md-6">
                                <img src="/placeholder.svg?height=300&width=400&text=Exterior+Design" alt="Stadium Exterior Design" class="img-fluid rounded shadow-sm">
                            </div>
                            <div class="col-md-6">
                                <img src="/placeholder.svg?height=300&width=400&text=Interior+Design" alt="Stadium Interior Design" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                        
                        <h2 class="fw-bold mt-5 mb-3">Sustainability Features</h2>
                        
                        <p>The stadium sets new standards for sustainability in sports architecture. Solar panels integrated into the roof structure will generate up to 40% of the stadium's energy needs, while rainwater harvesting systems will collect and reuse water for irrigation and non-potable uses.</p>
                        
                        <p>The design also incorporates natural ventilation systems that take advantage of Casablanca's coastal breezes, reducing the need for mechanical cooling. Construction will use locally sourced and recycled materials where possible, minimizing the carbon footprint of the project.</p>
                        
                        <blockquote class="blockquote bg-light p-4 my-4 rounded">
                            <p class="mb-0">"The Casablanca Grand Stadium will be a model of sustainability for future sporting venues around the world. We're proving that world-class facilities can also be environmentally responsible."</p>
                            <footer class="blockquote-footer mt-2">Hassan El Fassi, <cite title="Source">Minister of Sports</cite></footer>
                        </blockquote>
                        
                        <h2 class="fw-bold mt-5 mb-3">Construction Timeline</h2>
                        
                        <p>Construction is set to begin in early 2024 and will be completed by late 2029, allowing for extensive testing before the tournament begins in June 2030. The project will create thousands of jobs and provide valuable training opportunities for Moroccan workers in advanced construction techniques.</p>
                        
                        <p>The stadium will be built on a 120-hectare site in eastern Casablanca, with excellent transport connections to the city center and other parts of Morocco. The site will also include extensive green spaces, training facilities, and a commercial district that will ensure the stadium remains economically viable after the World Cup.</p>
                        
                        <h2 class="fw-bold mt-5 mb-3">Legacy Planning</h2>
                        
                        <p>After the 2030 World Cup, the Casablanca Grand Stadium will serve as the home venue for the Moroccan national football team and will host major international sporting events and concerts. Parts of the stadium complex will be open to the public daily, with a football museum, restaurants, and recreational facilities.</p>
                        
                        <p>The design includes modular elements that will allow for reconfiguration after the World Cup, ensuring the stadium remains sustainable and economically viable for decades to come. The surrounding area will be developed as a new urban district, with housing, offices, and public spaces.</p>
                        
                        <div class="alert alert-info mt-5">
                            <h5 class="alert-heading fw-bold">Public Exhibition</h5>
                            <p class="mb-0">A public exhibition of the stadium design, including detailed models and interactive displays, will be held at the Casablanca Design Museum from April 1-30, 2023. Admission is free, and guided tours will be available in multiple languages.</p>
                        </div>
                    </div>
                    
                    <!-- Tags -->
                    <div class="article-tags">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-secondary">World Cup 2030</span>
                            <span class="badge bg-secondary">Stadium Design</span>
                            <span class="badge bg-secondary">Casablanca</span>
                            <span class="badge bg-secondary">Architecture</span>
                            <span class="badge bg-secondary">Sustainability</span>
                        </div>
                    </div>
                    
                    <!-- Share -->
                    <div class="mt-4 share-buttons">
                        <h5 class="fw-bold">Share This Article</h5>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                                Facebook
                            </a>
                            <a href="#" class="btn btn-outline-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                                Twitter
                            </a>
                            <a href="#" class="btn btn-outline-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg>
                                WhatsApp
                            </a>
                            <a href="#" class="btn btn-outline-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                                </svg>
                                Share
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Related Articles -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold mb-4">Related Articles</h2>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=Rabat+Stadium" class="card-img-top" alt="Rabat Stadium Design">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-success">Stadiums</span>
                                <small class="text-muted">March 1, 2023</small>
                            </div>
                            <h5 class="card-title">Rabat National Stadium Design Competition Finalists Announced</h5>
                            <p class="card-text">Five international architectural firms have been shortlisted for the Rabat National Stadium design.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=Construction" class="card-img-top" alt="Construction Timeline">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-primary">Infrastructure</span>
                                <small class="text-muted">February 20, 2023</small>
                            </div>
                            <h5 class="card-title">Morocco 2030 Infrastructure Timeline Revealed</h5>
                            <p class="card-text">Comprehensive timeline for stadium construction and infrastructure development announced.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=Sustainability" class="card-img-top" alt="Sustainability Goals">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-warning">Sustainability</span>
                                <small class="text-muted">February 10, 2023</small>
                            </div>
                            <h5 class="card-title">Morocco Sets Ambitious Sustainability Goals for 2030 World Cup</h5>
                            <p class="card-text">Organizing committee announces plans for the most sustainable World Cup in history.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Newsletter -->
    <section class="py-5 bg-success text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="fw-bold mb-3">Stay Updated</h2>
                    <p class="mb-4">Subscribe to our newsletter for the latest news on the Morocco 2030 World Cup.</p>
                    <form class="row g-2 justify-content-center">
                        <div class="col-md-6">
                            <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-light btn-lg text-success">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

