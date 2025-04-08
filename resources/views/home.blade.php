<x-base-layout>
    <div class="hero relative w-full h-[90vh] md:h-screen overflow-hidden"> <!-- Adjust height here -->
        <img src="/images/Court.jpg" alt="Court Image" class="w-full h-full object-cover" /> <!-- Use object-cover for better scaling -->
        <div
            class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center text-white px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-8">Welcome to the Tennis Club</h1>
            <p class="text-xl md:text-2xl max-w-2xl">Join us for a great time on the court!</p>
            <div class="mt-12">
                <a href="/register"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg text-lg font-medium transition duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
                Join Now
             </a>
            </div>
        </div>
    </div>

    <!-- Additional sections can go here -->
    <div class="bg-white text-gray-800 py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-green-700 mb-4">Our Facilities</h2>
                <p class="text-xl max-w-3xl mx-auto">World-class courts and training facilities for players of all levels
                </p>
            </div>

            <!-- Facility cards would go here -->
        </div>
    </div>
</x-base-layout>
