<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">🛠️ Equipment Details</h2>
                <a href="{{ route('equipments.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>

            <!-- Details Section -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-4 text-gray-800">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-500">Name</p>
                        <p class="text-lg font-medium">{{ $equipment->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Type</p>
                        <p class="text-lg font-medium">{{ $equipment->type }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Condition</p>
                        <p class="text-lg font-medium">{{ ucfirst($equipment->condition) }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Availability</p>
                        <span class="inline-block mt-1 px-3 py-1 text-xs rounded-full 
                            {{ $equipment->available ? 'bg-green-600 text-green-100' : 'bg-red-600 text-red-100' }}">
                            {{ $equipment->available ? 'Available' : 'Not Available' }}
                        </span>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Rental Fee</p>
                        <p class="text-lg font-medium">${{ number_format($equipment->rental_fee, 2) }}</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('equipments.edit', $equipment) }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-edit"></i> Edit
                </a>

                <form action="{{ route('equipments.destroy', $equipment) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this equipment?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-base-layout>
