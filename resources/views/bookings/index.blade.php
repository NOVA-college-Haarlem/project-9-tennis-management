<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <div class="max-w-6xl mx-auto space-y-6">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">🎾 Bookings</h2>
                    <a href="{{ route('bookings.create') }}"
                       class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                       ➕ New Booking
                    </a>
                </div>
            
                @foreach($bookings as $booking)
                    <div class="bg-indigo-50 shadow-lg rounded-2xl p-6 hover:shadow-2xl transition duration-300">
                        <div class="flex flex-col h-full">
                            <!-- Content at top -->
                            <div class="space-y-2 mb-4">
                                <p class="text-lg font-semibold text-gray-800">#{{ $booking->id }} – <span class="text-indigo-600">{{ $booking->user->firstname }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Court:</strong> <span class="font-medium text-gray-800">{{ $booking->court->name }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Time:</strong> <span class="font-medium text-gray-800">{{ $booking->start_time }} → {{ $booking->end_time }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Type:</strong> <span class="capitalize font-medium text-gray-800">{{ $booking->booking_type }}</span></p>
                                <span class="inline-block mt-2 px-3 py-1 text-xs rounded-full 
                                    {{ $booking->status === 'confirmed' ? 'bg-green-600 text-green-100' : 
                                       ($booking->status === 'pending' ? 'bg-yellow-600 text-yellow-100' : 
                                       'bg-red-600 text-red-100') }}">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </div>
                            
                            <!-- Buttons at bottom with mt-auto -->
                            <div class="mt-auto pt-4 flex flex-wrap gap-2 border-t border-indigo-100">
                                <a href="{{ route('bookings.show', $booking->id) }}"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-eye text-sm"></i> <span class="text-sm">View</span>
                                </a>
                                <a href="{{ route('bookings.edit', $booking->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-pencil-alt text-sm"></i> <span class="text-sm">Edit</span>
                                </a>
                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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