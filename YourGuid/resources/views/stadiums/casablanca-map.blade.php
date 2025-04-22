@extends('layouts.app')

@section('title', 'Casablanca Stadium Map - Morocco 2030 World Cup Guide')

@section('additional_css')
<link href="{{ asset('css/stadium-detail.css') }}" rel="stylesheet">
<style>

</style>
@endsection

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-light py-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('stadiums') }}">Stadiums</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('stadiums.casablanca') }}">Casablanca Grand Stadium</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Stadium Map</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <h1 class="fw-bold mb-4">Casablanca Grand Stadium Map</h1>
            
            <div class="row mb-4">
                <div class="col-md-8">
                    <p class="lead">Explore the layout of the Casablanca Grand Stadium, the flagship venue for the 2030 FIFA World Cup in Morocco.</p>
                    <p>This interactive map shows the stadium layout, entrances, parking areas, transportation hubs, and facilities. Use the map to plan your visit and familiarize yourself with the venue before attending matches.</p>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Stadium Facts</h5>
                            <ul class="mb-0">
                                <li><strong>Capacity:</strong> 90,000 spectators</li>
                                <li><strong>Location:</strong> Eastern Casablanca</li>
                                <li><strong>Opening:</strong> 2029</li>
                                <li><strong>Matches:</strong> Opening Match, Group Stage, Round of 16, Quarter-Final, Final</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Stadium Map -->
            <div class="map-container">
                <img src="/placeholder.svg?height=600&width=1200&text=Casablanca+Stadium+Map" alt="Casablanca Stadium Map" class="w-100 h-100 object-fit-cover">
                
                <!-- Map Overlay -->
                <div class="map-overlay">
                    <h5 class="fw-bold mb-2">Casablanca Grand Stadium</h5>
                    <p class="small mb-0">The crown jewel of Morocco's World Cup venues, designed to blend traditional Moroccan architecture with modern engineering excellence.</p>
                </div>
                
                <!-- Map Legend -->
                <div class="map-legend">
                    <h6 class="fw-bold mb-2">Map Legend</h6>
                    <div class="legend-item">
                        <div class="legend-color" style="background-color: #0d6efd;"></div>
                        <span>Stadium Entrances</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background-color: #ffc107;"></div>
                        <span>Parking Areas</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background-color: #dc3545;"></div>
                        <span>Transport Hubs</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background-color: #6f42c1;"></div>
                        <span>Facilities</span>
                    </div>
                </div>
                
                <!-- Map Points -->
                <!-- Main Entrance -->
                <div class="map-point entrance" style="top: 50%; left: 20%;">
                    <div class="point-tooltip">Main Entrance (North)</div>
                </div>
                
                <!-- East Entrance -->
                <div class="map-point entrance" style="top: 40%; left: 80%;">
                    <div class="point-tooltip">East Entrance</div>
                </div>
                
                <!-- South Entrance -->
                <div class="map-point entrance" style="top: 80%; left: 50%;">
                    <div class="point-tooltip">South Entrance</div>
                </div>
                
                <!-- VIP Entrance -->
                <div class="map-point entrance" style="top: 30%; left: 40%;">
                    <div class="point-tooltip">VIP Entrance</div>
                </div>
                
                <!-- North Parking -->
                <div class="map-point parking" style="top: 20%; left: 30%;">
                    <div class="point-tooltip">North Parking (P1)</div>
                </div>
                
                <!-- East Parking -->
                <div class="map-point parking" style="top: 30%; left: 90%;">
                    <div class="point-tooltip">East Parking (P2)</div>
                </div>
                
                <!-- South Parking -->
                <div class="map-point parking" style="top: 90%; left: 60%;">
                    <div class="point-tooltip">South Parking (P3)</div>
                </div>
                
                <!-- Metro Station -->
                <div class="map-point transport" style="top: 60%; left: 10%;">
                    <div class="point-tooltip">Metro Station</div>
                </div>
                
                <!-- Bus Terminal -->
                <div class="map-point transport" style="top: 70%; left: 85%;">
                    <div class="point-tooltip">Bus Terminal</div>
                </div>
                
                <!-- Taxi Stand -->
                <div class="map-point transport" style="top: 40%; left: 15%;">
                    <div class="point-tooltip">Taxi Stand</div>
                </div>
                
                <!-- Food Court -->
                <div class="map-point facilities" style="top: 45%; left: 60%;">
                    <div class="point-tooltip">Main Food Court</div>
                </div>
                
                <!-- Fan Zone -->
                <div class="map-point facilities" style="top: 65%; left: 40%;">
                    <div class="point-tooltip">Fan Zone</div>
                </div>
                
                <!-- Medical Center -->
                <div class="map-point facilities" style="top: 35%; left: 70%;">
                    <div class="point-tooltip">Medical Center</div>
                </div>
            </div>
            
            <div class="mt-4 mb-5">
                <p class="text-muted">Click on any point on the map to learn more about that location. This interactive map is designed to help you navigate the stadium complex efficiently on match days.</p>
            </div>
            
            <!-- Panorama View -->
            <h2 class="fw-bold mb-4">Stadium Panorama View</h2>
            
            <div class="panorama-container">
                <img src="/placeholder.svg?height=500&width=1200&text=Casablanca+Stadium+360°+Panorama" alt="Casablanca Stadium Panorama" class="w-100 h-100 object-fit-cover">
                
                <!-- Panorama Controls -->
                <div class="panorama-controls">
                    <button class="panorama-button" id="panorama-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                    </button>
                    <button class="panorama-button" id="panorama-zoom-in">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                    </button>
                    <button class="panorama-button" id="panorama-zoom-out">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                    </button>
                    <button class="panorama-button" id="panorama-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </button>
                </div>
                
                <!-- Panorama Info -->
                <div class="panorama-info">
                    <h6 class="fw-bold mb-1">Virtual Stadium Tour</h6>
                    <p class="small mb-0">Experience a 360° view of the Casablanca Grand Stadium from the center of the pitch. Use the controls to navigate the panorama.</p>
                </div>
            </div>
            
            <div class="mt-4">
                <p>This panoramic view provides a preview of what spectators will experience during the 2030 FIFA World Cup. The stadium's design ensures excellent sightlines from all seating areas, creating an immersive atmosphere for fans.</p>
                <p>The Casablanca Grand Stadium features a partially retractable roof, state-of-the-art sound system, and the largest screens in Africa to enhance the match day experience.</p>
            </div>
            
            <div class="mt-5">
                <h3 class="fw-bold mb-3">Getting to the Stadium</h3>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Public Transportation</h5>
                        <ul>
                            <li><strong>Metro:</strong> Line 3 to "Stadium Station" (direct access to North Entrance)</li>
                            <li><strong>Bus:</strong> Routes S1, S2, and S3 from city center to Stadium Bus Terminal</li>
                            <li><strong>Shuttle:</strong> Free shuttle services from designated points throughout Casablanca</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5>By Car</h5>
                        <ul>
                            <li><strong>From City Center:</strong> 20-30 minutes via Eastern Highway</li>
                            <li><strong>Parking:</strong> 5,000 spaces available across three main parking areas</li>
                            <li><strong>Ride-sharing:</strong> Dedicated drop-off and pick-up zones at each entrance</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('stadiums.casablanca') }}" class="btn btn-success">Back to Stadium Details</a>
            </div>
        </div>
    </section>
@endsection

@section('additional_js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Map point click functionality
        const mapPoints = document.querySelectorAll('.map-point');
        mapPoints.forEach(point => {
            point.addEventListener('click', function() {
                const tooltip = this.querySelector('.point-tooltip');
                const tooltipText = tooltip.textContent;
                alert('Selected: ' + tooltipText + '\n\nAdditional information would be displayed here in the full implementation.');
            });
        });
        
        // Panorama controls
        const panoramaControls = {
            left: document.getElementById('panorama-left'),
            zoomIn: document.getElementById('panorama-zoom-in'),
            zoomOut: document.getElementById('panorama-zoom-out'),
            right: document.getElementById('panorama-right')
        };
        
        // Simulate panorama control actions
        for (const [key, control] of Object.entries(panoramaControls)) {
            control.addEventListener('click', function() {
                alert(`Panorama action: ${key}\n\nIn the full implementation, this would ${key === 'left' || key === 'right' ? 'rotate' : 'zoom'} the panorama view.`);
            });
        }
    });
</script>
@endsection

