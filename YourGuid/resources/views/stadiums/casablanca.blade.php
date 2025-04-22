@extends('layouts.app')

@section('title', 'Casablanca Grand Stadium - Morocco 2030 World Cup Guide')

@section('additional_css')
<link href="{{ asset('css/stadium-detail.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Stadium Hero -->
    <section class="stadium-hero" style="background-image: url('/placeholder.svg?height=1000&width=2000&text=Casablanca+Grand+Stadium')">
        <div class="stadium-hero-overlay"></div>
        <div class="container h-100 position-relative">
            <div class="d-flex flex-column justify-content-center h-100 text-white">
                <h1 class="display-4 fw-bold">Casablanca Grand Stadium</h1>
                <p class="lead">The crown jewel of Morocco's 2030 World Cup venues</p>
                <div class="d-flex gap-2 mt-3">
                    <span class="badge bg-success fs-6">Capacity: 90,000</span>
                    <span class="badge bg-primary fs-6">Opening Match</span>
                    <span class="badge bg-danger fs-6">Final</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Breadcrumb -->
    <div class="bg-light py-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('stadiums') }}">Stadiums</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Casablanca Grand Stadium</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <!-- Stadium Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Stadium Overview</h2>
                    <p class="lead">The Casablanca Grand Stadium is the flagship venue for the 2030 FIFA World Cup in Morocco, designed to be a landmark of modern architecture while honoring Moroccan cultural heritage.</p>
                    
                    <p>Set to be one of the most impressive stadiums in Africa, this state-of-the-art facility will host the opening match and the final of the tournament. The design draws inspiration from traditional Moroccan architecture, featuring intricate geometric patterns and a façade that reflects the country's rich artistic traditions.</p>
                    
                    <p>The stadium's innovative design includes a partially retractable roof, natural ventilation systems, and extensive use of sustainable materials. Solar panels integrated into the structure will generate a significant portion of the energy needed to operate the facility, making it one of the most environmentally friendly stadiums in the world.</p>
                    
                    <div class="row g-3 mt-4">
                        <div class="col-md-6">
                            <img src="/placeholder.svg?height=300&width=500&text=Stadium+Exterior" alt="Casablanca Stadium Exterior" class="img-fluid rounded shadow-sm">
                        </div>
                        <div class="col-md-6">
                            <img src="/placeholder.svg?height=300&width=500&text=Stadium+Interior" alt="Casablanca Stadium Interior" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                    
                    <!-- Stadium Tabs -->
                    <div class="mt-5">
                        <ul class="nav nav-tabs" id="stadiumTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design" type="button" role="tab" aria-controls="design" aria-selected="true">Design</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="construction-tab" data-bs-toggle="tab" data-bs-target="#construction" type="button" role="tab" aria-controls="construction" aria-selected="false">Construction</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sustainability-tab" data-bs-toggle="tab" data-bs-target="#sustainability" type="button" role="tab" aria-controls="sustainability" aria-selected="false">Sustainability</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="legacy-tab" data-bs-toggle="tab" data-bs-target="#legacy" type="button" role="tab" aria-controls="legacy" aria-selected="false">Legacy</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="stadiumTabsContent">
                            <div class="tab-pane fade show active" id="design" role="tabpanel" aria-labelledby="design-tab">
                                <h5 class="fw-bold mb-3">Architectural Design</h5>
                                <p>The stadium's design was created by a collaborative team of Moroccan and international architects. The distinctive exterior features a façade inspired by traditional Moroccan zellige tilework, with intricate geometric patterns that create a stunning visual effect, especially when illuminated at night.</p>
                                <p>The bowl-shaped seating arrangement ensures excellent sightlines from every seat, while the partially retractable roof allows for natural light and ventilation while protecting spectators from extreme weather conditions.</p>
                            </div>
                            <div class="tab-pane fade" id="construction" role="tabpanel" aria-labelledby="construction-tab">
                                <h5 class="fw-bold mb-3">Construction Timeline</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Design Competition Completed</span>
                                        <span class="badge bg-success rounded-pill">2023</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Groundbreaking Ceremony</span>
                                        <span class="badge bg-success rounded-pill">2024</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Foundation Completion</span>
                                        <span class="badge bg-success rounded-pill">2025</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Structural Framework</span>
                                        <span class="badge bg-success rounded-pill">2026</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Roof Installation</span>
                                        <span class="badge bg-success rounded-pill">2027</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Interior Finishing</span>
                                        <span class="badge bg-success rounded-pill">2028</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Stadium Completion</span>
                                        <span class="badge bg-success rounded-pill">2029</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Test Events</span>
                                        <span class="badge bg-success rounded-pill">2029-2030</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="sustainability" role="tabpanel" aria-labelledby="sustainability-tab">
                                <h5 class="fw-bold mb-3">Sustainability Features</h5>
                                <p>The Casablanca Grand Stadium is designed to be a model of sustainability in sports architecture:</p>
                                <ul>
                                    <li><strong>Renewable Energy:</strong> Integrated solar panels on the roof and surrounding areas generate up to 40% of the stadium's energy needs.</li>
                                    <li><strong>Water Conservation:</strong> Rainwater harvesting systems collect and reuse water for irrigation and non-potable uses.</li>
                                    <li><strong>Natural Ventilation:</strong> The stadium's design maximizes air flow, reducing the need for mechanical cooling.</li>
                                    <li><strong>Sustainable Materials:</strong> Construction uses locally sourced and recycled materials where possible.</li>
                                    <li><strong>Waste Management:</strong> Comprehensive recycling and waste reduction programs will be implemented during construction and operation.</li>
                                    <li><strong>Green Spaces:</strong> The stadium complex includes extensive landscaping with native plants that require minimal irrigation.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="legacy" role="tabpanel" aria-labelledby="legacy-tab">
                                <h5 class="fw-bold mb-3">Post-World Cup Legacy</h5>
                                <p>After the 2030 World Cup, the Casablanca Grand Stadium will continue to serve as:</p>
                                <ul>
                                    <li>The home venue for the Moroccan national football team</li>
                                    <li>A multi-purpose venue for international sporting events</li>
                                    <li>A concert and entertainment venue with world-class facilities</li>
                                    <li>A tourist attraction with stadium tours and a football museum</li>
                                    <li>A community hub with facilities open to local residents</li>
                                </ul>
                                <p>The stadium's design includes modular elements that will allow for reconfiguration after the World Cup, ensuring it remains sustainable and economically viable for decades to come.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Stadium Specifications -->
                    <div class="stadium-specs mb-4">
                        <h3 class="fw-bold mb-4">Stadium Specifications</h3>
                        
                        <div class="spec-item">
                            <div class="spec-icon text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <div>
                                <p class="fw-bold mb-0">Capacity</p>
                                <p class="mb-0">90,000 spectators</p>
                            </div>
                        </div>
                        
                        <div class="spec-item">
                            <div class="spec-icon text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            </div>
                            <div>
                                <p class="fw-bold mb-0">Location</p>
                                <p class="mb-0">Casablanca, Morocco</p>
                            </div>
                        </div>
                        
                        <div class="spec-item">
                            <div class="spec-icon text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <div>
                                <p class="fw-bold mb-0">Construction Period</p>
                                <p class="mb-0">2024 - 2029</p>
                            </div>
                        </div>
                        
                        <div class="spec-item">
                            <div class="spec-icon text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                            </div>
                            <div>
                                <p class="fw-bold mb-0">Playing Surface</p>
                                <p class="mb-0">Natural grass with hybrid reinforcement</p>
                            </div>
                        </div>
                        
                        <div class="spec-item">
                            <div class="spec-icon text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12h20"></path><path d="M2 12v8a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-8"></path><path d="M2 12v-8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v8"></path></svg>
                            </div>
                            <div>
                                <p class="fw-bold mb-0">Roof</p>
                                <p class="mb-0">Partially retractable</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- World Cup Matches -->
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h3 class="card-title h5 mb-0 fw-bold">World Cup 2030 Matches</h3>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item match-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-primary">Opening Match</span>
                                        <span class="small text-muted">June 8, 2030</span>
                                    </div>
                                    <p class="fw-bold mb-0 mt-2">Morocco vs TBD</p>
                                    <p class="small text-muted mb-0">Group A</p>
                                </li>
                                <li class="list-group-item match-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-secondary">Group Stage</span>
                                        <span class="small text-muted">June 12, 2030</span>
                                    </div>
                                    <p class="fw-bold mb-0 mt-2">TBD vs TBD</p>
                                    <p class="small text-muted mb-0">Group C</p>
                                </li>
                                <li class="list-group-item match-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-secondary">Group Stage</span>
                                        <span class="small text-muted">June 16, 2030</span>
                                    </div>
                                    <p class="fw-bold mb-0 mt-2">TBD vs TBD</p>
                                    <p class="small text-muted mb-0">Group E</p>
                                </li>
                                <li class="list-group-item match-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-info">Round of 16</span>
                                        <span class="small text-muted">June 30, 2030</span>
                                    </div>
                                    <p class="fw-bold mb-0 mt-2">1A vs 2B</p>
                                    <p class="small text-muted mb-0">Match 49</p>
                                </li>
                                <li class="list-group-item match-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-warning">Quarter-Final</span>
                                        <span class="small text-muted">July 4, 2030</span>
                                    </div>
                                    <p class="fw-bold mb-0 mt-2">W49 vs W50</p>
                                    <p class="small text-muted mb-0">Match 57</p>
                                </li>
                                <li class="list-group-item match-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-danger">Final</span>
                                        <span class="small text-muted">July 8, 2030</span>
                                    </div>
                                    <p class="fw-bold mb-0 mt-2">W61 vs W62</p>
                                    <p class="small text-muted mb-0">Match 64</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Getting There -->
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="card-title h5 mb-0 fw-bold">Getting There</h3>
                        </div>
                        <div class="card-body">
                            <p>The Casablanca Grand Stadium is located 15km east of downtown Casablanca, with excellent transport connections:</p>
                            <ul class="mb-0">
                                <li><strong>Metro:</strong> Dedicated station on Line 3</li>
                                <li><strong>Bus:</strong> Express shuttle services from city center</li>
                                <li><strong>Car:</strong> 5,000 parking spaces available</li>
                                <li><strong>Taxi:</strong> Designated drop-off zones</li>
                            </ul>
                            <a href="#" class="btn btn-outline-success mt-3 w-100">View Transportation Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 360° Panorama View -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">360° Panorama View</h2>
            <div class="panorama-container mb-3">
                <img src="/placeholder.svg?height=400&width=1200&text=360°+Panorama+View" alt="360° Panorama View" class="w-100 h-100 object-fit-cover">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <button class="btn btn-success btn-lg rounded-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                    </button>
                </div>
            </div>
            <p class="text-center text-muted">Click to explore the stadium in 360° view (Architectural rendering)</p>
        </div>
    </section>
    
    <!-- Stadium Facilities -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Stadium Facilities</h2>
            
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4 text-center">
                <div class="col">
                    <div class="facility-icon mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                    </div>
                    <h5 class="fw-bold">Food & Beverage</h5>
                    <p class="small">120+ concession stands featuring local and international cuisine</p>
                </div>
                
                <div class="col">
                    <div class="facility-icon mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <h5 class="fw-bold">VIP Lounges</h5>
                    <p class="small">Premium hospitality areas with exclusive services</p>
                </div>
                
                <div class="col">
                    <div class="facility-icon mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    </div>
                    <h5 class="fw-bold">Medical Facilities</h5>
                    <p class="small">State-of-the-art medical centers throughout the stadium</p>
                </div>
                
                <div class="col">
                    <div class="facility-icon mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h5 class="fw-bold">Family Areas</h5>
                    <p class="small">Dedicated sections for families with children's activities</p>
                </div>
                
                <div class="col">
                    <div class="facility-icon mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4"></path><path d="M12 16h.01"></path></svg>
                    </div>
                    <h5 class="fw-bold">Information Points</h5>
                    <p class="small">Multilingual staff to assist visitors throughout the venue</p>
                </div>
                
                <div class="col">
                    <div class="facility-icon mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><path d="M15.6 11.6L22 7v10l-6.4-4.5v-1zM4 5h9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2z"></path></svg>
                    </div>
                    <h5 class="fw-bold">Giant Screens</h5>
                    <p class="small">Four 200m² HD screens visible from all seats</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Nearby Attractions -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold mb-4">Nearby Attractions</h2>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=Hassan+II+Mosque" class="card-img-top" alt="Hassan II Mosque">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Hassan II Mosque</h5>
                            <p class="card-text">One of the largest mosques in the world with a stunning location overlooking the Atlantic Ocean.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted">Distance: 12km</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=Casablanca+Corniche" class="card-img-top" alt="Casablanca Corniche">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Casablanca Corniche</h5>
                            <p class="card-text">A beautiful beachfront district with restaurants, cafes, and recreational facilities along the Atlantic coast.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted">Distance: 10km</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=Morocco+Mall" class="card-img-top" alt="Morocco Mall">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Morocco Mall</h5>
                            <p class="card-text">One of Africa's largest shopping centers featuring international brands, entertainment, and an aquarium.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted">Distance: 8km</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Fan Experience -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Fan Experience</h2>
                    <p class="lead">The Casablanca Grand Stadium is designed to provide an unforgettable experience for all visitors.</p>
                    
                    <div class="accordion" id="fanExperienceAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accessibility
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#fanExperienceAccordion">
                                <div class="accordion-body">
                                    <p>The stadium is fully accessible with dedicated seating areas, accessible restrooms, and barrier-free pathways throughout. Elevators and ramps provide access to all levels, and trained staff are available to assist visitors with special needs.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Technology
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#fanExperienceAccordion">
                                <div class="accordion-body">
                                    <p>The stadium features state-of-the-art technology including high-speed WiFi throughout, a dedicated mobile app for wayfinding and information, cashless payment systems, and augmented reality features that enhance the match day experience.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Fan Zones
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#fanExperienceAccordion">
                                <div class="accordion-body">
                                    <p>Interactive fan zones around the stadium offer pre-match entertainment, games, exhibits, and activities for all ages. These areas open hours before kick-off, allowing fans to enjoy the atmosphere and build excitement before the match.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="/placeholder.svg?height=400&width=600&text=Fan+Experience" alt="Fan Experience" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stadium Tours -->
    <section class="py-5 bg-success text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">Stadium Tours</h2>
                    <p class="lead">Experience the Casablanca Grand Stadium up close with guided tours available after completion in 2029.</p>
                    <p>Tours will include access to areas normally restricted during match days, including the players' tunnel, dressing rooms, press conference room, and VIP areas. Knowledgeable guides will share insights about the stadium's design, construction, and the history of Moroccan football.</p>
                    <button class="btn btn-light text-success mt-3">Join the Waiting List</button>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-white text-dark">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Tour Information</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><strong>Duration:</strong> 90 minutes</li>
                                <li class="mb-2"><strong>Languages:</strong> Arabic, English, French, Spanish</li>
                                <li class="mb-2"><strong>Accessibility:</strong> Fully accessible</li>
                                <li><strong>Available:</strong> From January 2029</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Related Stadiums -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold mb-4">Explore Other Stadiums</h2>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=Rabat+National+Stadium" class="card-img-top" alt="Rabat National Stadium">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Rabat National Stadium</h5>
                            <p class="card-text">The capital city's flagship venue with a capacity of 70,000 spectators.</p>
                            <a href="{{ route('stadiums.rabat') }}" class="btn btn-outline-success">View Stadium</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=Marrakech+Stadium" class="card-img-top" alt="Marrakech Stadium">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Marrakech Stadium</h5>
                            <p class="card-text">A 65,000-capacity venue set against the backdrop of the Atlas Mountains.</p>
                            <a href="{{ route('stadiums.marrakech') }}" class="btn btn-outline-success">View Stadium</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=200&width=400&text=Tangier+Ibn+Battouta+Stadium" class="card-img-top" alt="Tangier Ibn Battouta Stadium">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Tangier Ibn Battouta Stadium</h5>
                            <p class="card-text">A 60,000-seat stadium with spectacular views of the Mediterranean Sea.</p>
                            <a href="{{ route('stadiums.tangier') }}" class="btn btn-outline-success">View Stadium</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additional_js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // This would be replaced with actual panorama viewer implementation
        const panoramaButton = document.querySelector('.panorama-container .btn');
        if (panoramaButton) {
            panoramaButton.addEventListener('click', function() {
                alert('360° panorama viewer would be initialized here');
            });
        }
    });
</script>
@endsection

