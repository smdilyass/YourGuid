<div class="relative mx-auto" style="height: 500px; max-width: 500px;">
    <!-- Star Background -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="relative w-3/4 h-3/4">
            <div class="absolute w-full h-full bg-green-100 rounded-full opacity-20"></div>
            <div class="absolute top-1/2 left-0 w-full h-1 bg-green-200 opacity-30 transform -translate-y-1/2"></div>
            <div class="absolute top-0 left-1/2 w-1 h-full bg-green-200 opacity-30 transform -translate-x-1/2"></div>
            <div class="absolute top-0 left-0 w-full h-full transform rotate-45">
                <div class="absolute top-1/2 left-0 w-full h-1 bg-green-200 opacity-30 transform -translate-y-1/2">
                </div>
            </div>
            <div class="absolute top-0 left-0 w-full h-full transform -rotate-45">
                <div class="absolute top-1/2 left-0 w-full h-1 bg-green-200 opacity-30 transform -translate-y-1/2">
                </div>
            </div>
        </div>
    </div>

    <!-- Center Icon - Morocco Flag Star -->
    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-green-700 rounded-full flex items-center justify-center z-10 shadow-lg">
        <div class="text-white">
            <i class="fas fa-star fa-5x" style="color: #FF0000;"></i>
        </div>
    </div>

    <!-- Category Buttons -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
        <a href="{{ route('transport') }}"
            class="bg-red-600 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <i class="fas fa-bus-alt fa-2x"></i>
            <span class="text-xs font-medium mt-1">Transport</span>
        </a>
    </div>

    <div class="absolute top-1/4 right-0 translate-x-1/2 z-20">
        <a href="{{ route('stadiums') }}"
            class="bg-green-700 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <i class="fas fa-landmark fa-2x"></i>
            <span class="text-xs font-medium mt-1">Stadiums</span>
        </a>
    </div>

    <div class="absolute bottom-1/4 right-1/4 translate-x-1/2 translate-y-1/2 z-20">
        <a href="{{ route('hotels') }}"
            class="bg-amber-500 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <i class="fas fa-hotel fa-2x"></i>
            <span class="text-xs font-medium mt-1">Hotels</span>
        </a>
    </div>

    <div class="absolute bottom-1/4 left-1/4 -translate-x-1/2 translate-y-1/2 z-20">
        <a href="{{ route('culture') }}"
            class="bg-blue-600 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <i class="fas fa-globe fa-2x"></i>
            <span class="text-xs font-medium mt-1">Culture</span>
        </a>
    </div>

    <div class="absolute top-1/4 left-0 -translate-x-1/2 z-20">
        <a href="{{ route('attractions') }}"
            class="bg-purple-600 w-20 h-20 rounded-full flex flex-col items-center justify-center text-white shadow-lg transform transition-transform hover:scale-110">
            <i class="fas fa-map-marker-alt fa-2x"></i>
            <span class="text-xs font-medium mt-1">Attractions</span>
        </a>
    </div>
</div>