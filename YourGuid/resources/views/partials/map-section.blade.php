<div class="bg-white rounded-xl shadow-lg overflow-hidden">
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-3/4 relative bg-green-50 h-[400px] md:h-[600px]" id="morocco-map">
            <!-- Map Image -->
            <div class="absolute inset-0">
                <img src="{{ asset('images/morocco-map.jpg') }}" alt="Map of Morocco" class="w-full h-full object-cover">
            </div>
            
            <!-- Map Pins -->
            <div class="absolute" style="left: 30%; top: 40%;" data-location="casablanca">
                <div class="flex flex-col items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500 group-hover:text-red-600 group-hover:scale-110 transition-transform"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span class="text-xs font-bold bg-white px-2 py-1 rounded shadow-md hidden group-hover:block">
                        Casablanca
                    </span>
                </div>
            </div>
            
            <div class="absolute" style="left: 25%; top: 30%;" data-location="rabat">
                <div class="flex flex-col items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500 group-hover:text-red-600 group-hover:scale-110 transition-transform"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span class="text-xs font-bold bg-white px-2 py-1 rounded shadow-md hidden group-hover:block">
                        Rabat
                    </span>
                </div>
            </div>
            
            <div class="absolute" style="left: 45%; top: 60%;" data-location="marrakech">
                <div class="flex flex-col items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500 group-hover:text-red-600 group-hover:scale-110 transition-transform"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span class="text-xs font-bold bg-white px-2 py-1 rounded shadow-md hidden group-hover:block">
                        Marrakech
                    </span>
                </div>
            </div>
            
            <div class="absolute" style="left: 20%; top: 15%;" data-location="tangier">
                <div class="flex flex-col items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500 group-hover:text-red-600 group-hover:scale-110 transition-transform"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span class="text-xs font-bold bg-white px-2 py-1 rounded shadow-md hidden group-hover:block">
                        Tangier
                    </span>
                </div>
            </div>
            
            <div class="absolute" style="left: 50%; top: 75%;" data-location="agadir">
                <div class="flex flex-col items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500 group-hover:text-red-600 group-hover:scale-110 transition-transform"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span class="text-xs font-bold bg-white px-2 py-1 rounded shadow-md hidden group-hover:block">
                        Agadir
                    </span>
                </div>
            </div>
            
            <div class="absolute" style="left: 40%; top: 35%;" data-location="fes">
                <div class="flex flex-col items-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500 group-hover:text-red-600 group-hover:scale-110 transition-transform"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span class="text-xs font-bold bg-white px-2 py-1 rounded shadow-md hidden group-hover:block">
                        Fes
                    </span>
                </div>
            </div>
        </div>
        
        <div class="w-full md:w-1/4 p-6 bg-white">
            <h3 class="text-xl font-bold mb-4">Host Cities</h3>
            <ul class="space-y-4" id="city-list">
                <li>
                    <button data-city="casablanca" class="city-button flex items-center gap-2 w-full text-left p-2 rounded-lg transition-colors hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span class="font-medium">Casablanca</span>
                    </button>
                    <div class="city-info hidden mt-2 ml-7 text-sm text-gray-600 space-y-2">
                        <p>Stadium: Casablanca Stadium</p>
                        <p>Capacity: 60,000</p>
                        <p>Matches: Group Stage, Round of 16</p>
                        <a href="{{ route('stadiums.casablanca') }}" class="text-green-700 hover:underline mt-1 block">View Details</a>
                    </div>
                </li>
                <li>
                    <button data-city="rabat" class="city-button flex items-center gap-2 w-full text-left p-2 rounded-lg transition-colors hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span class="font-medium">Rabat</span>
                    </button>
                    <div class="city-info hidden mt-2 ml-7 text-sm text-gray-600 space-y-2">
                        <p>Stadium: Rabat Stadium</p>
                        <p>Capacity: 45,000</p>
                        <p>Matches: Group Stage</p>
                        <a href="{{ route('stadiums.rabat') }}" class="text-green-700 hover:underline mt-1 block">View Details</a>
                    </div>
                </li>
                <li>
                    <button data-city="marrakech" class="city-button flex items-center gap-2 w-full text-left p-2 rounded-lg transition-colors hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span class="font-medium">Marrakech</span>
                    </button>
                    <div class="city-info hidden mt-2 ml-7 text-sm text-gray-600 space-y-2">
                        <p>Stadium: Marrakech Stadium</p>
                        <p>Capacity: 50,000</p>
                        <p>Matches: Group Stage, Quarter Finals</p>
                        <a href="{{ route('stadiums.marrakech') }}" class="text-green-700 hover:underline mt-1 block">View Details</a>
                    </div>
                </li>
                <li>
                    <button data-city="tangier" class="city-button flex items-center gap-2 w-full text-left p-2 rounded-lg transition-colors hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span class="font-medium">Tangier</span>
                    </button>
                    <div class="city-info hidden mt-2 ml-7 text-sm text-gray-600 space-y-2">
                        <p>Stadium: Tangier Stadium</p>
                        <p>Capacity: 40,000</p>
                        <p>Matches: Group Stage</p>
                        <a href="{{ route('stadiums.tangier') }}" class="text-green-700 hover:underline mt-1 block">View Details</a>
                    </div>
                </li>
                <li>
                    <button data-city="agadir" class="city-button flex items-center gap-2 w-full text-left p-2 rounded-lg transition-colors hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span class="font-medium">Agadir</span>
                    </button>
                    <div class="city-info hidden mt-2 ml-7 text-sm text-gray-600 space-y-2">
                        <p>Stadium: Agadir Stadium</p>
                        <p>Capacity: 35,000</p>
                        <p>Matches: Group Stage</p>
                        <a href="{{ route('stadiums.agadir') }}" class="text-green-700 hover:underline mt-1 block">View Details</a>
                    </div>
                </li>
                <li>
                    <button data-city="fes" class="city-button flex items-center gap-2 w-full text-left p-2 rounded-lg transition-colors hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-500"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span class="font-medium">Fes</span>
                    </button>
                    <div class="city-info hidden mt-2 ml-7 text-sm text-gray-600 space-y-2">
                        <p>Stadium: Fes Stadium</p>
                        <p>Capacity: 38,000</p>
                        <p>Matches: Group Stage</p>
                        <a href="{{ route('stadiums.fes') }}" class="text-green-700 hover:underline mt-1 block">View Details</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

