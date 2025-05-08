@extends('layouts.app')

@section('title', 'Contact Us - Morocco 2030 World Cup Guide')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-red-700 to-red-900 text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold mb-4">Contact Us</h1>
                    <p class="lead">Have questions about the 2030 World Cup in Morocco? We're here to help!</p>
                </div>
                <div class="col-md-6">
                    <img src="images/contact.webp?height=300&width=500&text=Contact" alt="Contact" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Get in Touch</h2>
                    
                    <!-- Contact Form -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="newsletter">
                                            <label class="form-check-label" for="newsletter">
                                                Subscribe to our newsletter for updates
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- FAQ Section -->
                    <h3 class="fw-bold mb-3">Frequently Asked Questions</h3>
                    <div class="accordion shadow-sm" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    When will tickets for the 2030 World Cup be available?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ticket sales for the 2030 FIFA World Cup are expected to begin in late 2028 or early 2029. FIFA will announce the official ticket sales process and timeline closer to the event. We recommend subscribing to our newsletter to receive updates on ticket availability.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How can I find accommodation during the World Cup?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The official Morocco 2030 accommodation platform will launch in 2028, offering verified properties and guaranteed rates. In the meantime, you can explore our Hotels section for information on the types of accommodation that will be available in each host city.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do I need a visa to visit Morocco for the World Cup?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Visa requirements vary depending on your nationality. Morocco is expected to implement a special visa process for World Cup ticket holders, similar to previous tournaments. We will provide detailed visa information closer to the event as official policies are announced.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How can I travel between host cities during the tournament?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Morocco is investing heavily in transportation infrastructure for the 2030 World Cup. Visitors will be able to travel between host cities using high-speed trains, domestic flights, intercity buses, and rental cars. Special World Cup transportation passes will be available, offering unlimited travel on public transport during the tournament. Check our Transport section for more details.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Contact Information Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Contact Information</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex align-items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success me-2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    <div>
                                        <p class="fw-bold mb-0">Phone</p>
                                        <p>+212 5XX-XXXXXX</p>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success me-2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <div>
                                        <p class="fw-bold mb-0">Email</p>
                                        <p>info@morocco2030guide.com</p>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success me-2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    <div>
                                        <p class="fw-bold mb-0">Address</p>
                                        <p>123 Avenue Mohammed V<br>Rabat, Morocco</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Office Hours Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Office Hours</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2 d-flex justify-content-between">
                                    <span>Monday - Friday:</span>
                                    <span>9:00 AM - 5:00 PM</span>
                                </li>
                                <li class="mb-2 d-flex justify-content-between">
                                    <span>Saturday:</span>
                                    <span>10:00 AM - 2:00 PM</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Sunday:</span>
                                    <span>Closed</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Social Media Card -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Connect With Us</h3>
                            <p>Follow us on social media for the latest updates.</p>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-dark" aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                                </a>
                                <a href="#" class="btn btn-outline-dark" aria-label="Twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
                                </a>
                                <a href="#" class="btn btn-outline-dark" aria-label="Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                                </a>
                                <a href="#" class="btn btn-outline-dark" aria-label="YouTube">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Find Us</h2>
            <div class="map-container shadow-sm" style="height: 400px;">
                <!-- Map will be loaded here via JavaScript -->
                <img src="/placeholder.svg?height=400&width=1200&text=Map+Location" alt="Office Location Map" class="w-100 h-100 object-fit-cover">
            </div>
        </div>
    </section>
@endsection

