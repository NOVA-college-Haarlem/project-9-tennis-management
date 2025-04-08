<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <div class="max-w-6xl mx-auto space-y-6">

                <!-- Header with Title and Buttons -->
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 flex items-center gap-2">
                        ⚙️ <span>Equipment List</span>
                    </h2>

                    <div class="flex gap-4 justify-end w-full">
                        <a href="{{ route('equipment_rentals.index') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-calendar-check text-sm"></i> <span>Equipment Rentals</span>
                        </a>

                        <a href="{{ route('equipments.create') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-plus text-sm"></i> <span>Add New Equipment</span>
                        </a>
                    </div>
                </div>

                <!-- Equipment Cards -->
                @foreach ($equipments as $equipment)
                    <div class="bg-indigo-50 shadow-lg rounded-2xl p-6 hover:shadow-2xl transition duration-300">
                        <div class="flex flex-col h-full">
                            <!-- Equipment Info -->
                            <div class="space-y-2 mb-4">
                                <p class="text-lg font-semibold text-gray-800">{{ $equipment->name }}</p>
                                <p class="text-sm text-gray-600"><strong>Type:</strong> <span class="font-medium text-gray-800">{{ $equipment->type }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Condition:</strong> <span class="font-medium text-gray-800">{{ ucfirst($equipment->condition) ?? 'N/A' }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Rental Fee:</strong> <span class="font-medium text-gray-800">${{ number_format((float) $equipment->rental_fee, 2) }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Availability:</strong>
                                    <span class="inline-block mt-1 px-3 py-1 text-xs rounded-full 
                                        {{ $equipment->available ? 'bg-green-600 text-green-100' : 'bg-red-600 text-red-100' }}">
                                        {{ $equipment->available ? 'Available' : 'Not Available' }}
                                    </span>
                                </p>
                            </div>

                            <!-- Action Buttons -->
                            <div class="mt-auto pt-4 flex flex-wrap gap-2 border-t border-indigo-100">
                                <a href="{{ route('equipments.show', $equipment) }}"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-eye text-sm"></i> <span class="text-sm">View</span>
                                </a>
                                <a href="{{ route('equipments.edit', $equipment) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-pencil-alt text-sm"></i> <span class="text-sm">Edit</span>
                                </a>
                                <form action="{{ route('equipments.destroy', $equipment) }}" method="POST" onsubmit="return confirm('Delete this equipment?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                        <i class="fas fa-trash-alt text-sm"></i> <span class="text-sm">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
</x-base-layout>
