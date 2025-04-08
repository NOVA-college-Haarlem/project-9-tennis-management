<x-base-layout>
<<<<<<< HEAD
    <main class="container mx-auto my-12 px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800 text-center sm:text-left">🛠️ Rental Details</h2>
                <a href="{{ route('equipment_rentals.index') }}"
                    class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Rentals
                </a>
            </div>

            <!-- Rental Info Section -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                    <div class="space-y-4">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Equipment</p>
                            <p class="font-medium text-indigo-600 text-lg">{{ $equipmentRental->equipment->name }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Start Time</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $equipmentRental->start_time }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Status</p>
                            <span class="inline-block mt-2 px-3 py-1 text-xs rounded-full font-semibold 
                                {{ $equipmentRental->status === 'active' 
                                    ? 'bg-green-600 text-green-100' 
                                    : ($equipmentRental->status === 'pending' 
                                        ? 'bg-yellow-600 text-yellow-100' 
                                        : 'bg-red-600 text-red-100') }}">
                                {{ ucfirst($equipmentRental->status) }}
                            </span>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">User</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $equipmentRental->user->firstname }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">End Time</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $equipmentRental->end_time }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                <a href="{{ route('equipment_rentals.edit', $equipmentRental) }}"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center justify-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-pencil-alt"></i> <span>Edit Rental</span>
                </a>

                <form action="{{ route('equipment_rentals.destroy', $equipmentRental) }}" method="POST"
                    onsubmit="return confirm('Are you sure?')" class="w-full sm:w-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="w-full bg-red-500 hover:bg-red-600 text-white px-3 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center justify-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash-alt"></i> <span>Delete Rental</span>
                    </button>
                </form>
            </div>

        </div>
    </main>
=======
    <h1>Rental Details</h1>

    <table>
        <tr>
            <th>Equipment</th>
            <td>{{ $equipmentRental->equipment->name }}</td>
        </tr>
        <tr>
            <th>User</th>
            <td>{{ $equipmentRental->user->firstname }}</td>
        </tr>
        <tr>
            <th>Start Time</th>
            <td>{{ $equipmentRental->start_time }}</td>
        </tr>
        <tr>
            <th>End Time</th>
            <td>{{ $equipmentRental->end_time }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ ucfirst($equipmentRental->status) }}</td>
        </tr>
    </table>

    <a href="{{ route('equipment_rentals.index') }}">Back to Rentals</a>
    <a href="{{ route('equipment_rentals.edit', $equipmentRental) }}">Edit</a>

    <form action="{{ route('equipment_rentals.destroy', $equipmentRental) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
>>>>>>> 07a1b80ba1e5bc6062338a3528c2866f5d67200e
</x-base-layout>
