<div class="relative mx-auto" style="height: 500px; max-width: 500px;">
    <!-- Star Background -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="relative w-3/4 h-3/4">
            <div class="absolute w-full h-full bg-green-100 rounded-full opacity-20"></div>
            <div class="absolute top-1/2 left-0 w-full h-1 bg-green-200 opacity-30 transform -translate-y-1/2"></div>
            <div class="absolute top-0 left-1/2 w-1 h-full bg-green-200 opacity-30 transform -translate-x-1/2"></div>
            <div class="absolute top-0 left-0 w-full h-full transform rotate-45">
                <div class="absolute top-1/2 left-0 w-full h-1 bg-green-200 opacity-30 transform -translate-y-1/2"></div>
            </div>
            <div class="absolute top-0 left-0 w-full h-full transform -rotate-45">
                <div class="absolute top-1/2 left-0 w-full h-1 bg-green-200 opacity-30 transform -translate-y-1/2"></div>
            </div>
        </div>
    </div>
    
    <!-- Center Icon - Morocco Flag Star -->
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-green-700 rounded-full flex items-center justify-center z-10 shadow-lg">
        <div class="text-white">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L14.4 8.4H21.1L15.6 12.8L18 19.2L12 14.8L6 19.2L8.4 12.8L2.9 8.4H9.6L12 2Z" fill="#FF0000" stroke="#FF0000"/>
            </svg>
        </div>
    </div>
    
    <!-- Category Buttons -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
        <a href="{{ route('transport') }}" class="bg-red-600 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 6v6"/><path d="M15 6v6"/><path d="M2 12h19.6"/><path d="M18 18h3"/><path d="M2 18h3"/><rect width="18" height="8" x="3" y="6" rx="2"/><path d="M2 12v6"/><path d="M22 12v6"/></svg>
            <span class="text-xs font-medium mt-1">Transport</span>
        </a>
    </div>
    
    <div class="absolute top-1/4 right-0 translate-x-1/2 z-20">
        <a href="{{ route('stadiums') }}" class="bg-green-700 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
            <span class="text-xs font-medium mt-1">Stadiums</span>
        </a>
    </div>
    
    <div class="absolute bottom-1/4 right-1/4 translate-x-1/2 translate-y-1/2 z-20">
        <a href="{{ route('hotels') }}" class="bg-amber-500 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2Z"/><path d="m9 16 .348-.24c1.465-1.013 3.84-1.013 5.304 0L15 16"/><path d="M8 7h.01"/><path d="M16 7h.01"/><path d="M12 7h.01"/><path d="M12 11h.01"/><path d="M16 11h.01"/><path d="M8 11h.01"/><path d="M10 22v-6.5m4 0V22"/></svg>
            <span class="text-xs font-medium mt-1">Hotels</span>
        </a>
    </div>
    
    <div class="absolute bottom-1/4 left-1/4 -translate-x-1/2 translate-y-1/2 z-20">
        <a href="{{ route('culture') }}" class="bg-blue-600 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="16" x="4" y="5" rx="2"/><path d="M12 3v2"/><path d="M12 21v-2"/><path d="M3 12h2"/><path d="M19 12h2"/><path d="m7 7 1.5 1.5"/><path d="M7 17 8.5 15.5"/><path d="m17 7-1.5 1.5"/><path d="m17 17-1.5-1.5"/></svg>
            <span class="text-xs font-medium mt-1">Culture</span>
        </a>
    </div>
    
    <div class="absolute top-1/4 left-0 -translate-x-1/2 z-20">
        <a href="{{ route('attractions') }}" class="bg-purple-600 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            <span class="text-xs font-medium mt-1">Attractions</span>
        </a>
    </div>
</div>

