<x-base-layout>
<<<<<<< HEAD
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">🎒 Rent Equipment</h2>
                <a href="{{ route('equipment_rentals.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Rentals
                </a>
            </div>

            <!-- Error Section -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-600 p-4 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>⚠️ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Section -->
            <form action="{{ route('equipment_rentals.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Equipment -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Equipment</label>
                        <select name="equipment_id" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            @foreach($equipments as $equipment)
                                <option value="{{ $equipment->id }}">{{ $equipment->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- User -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">User</label>
                        <select name="user_id" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Start Time & End Time -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Start Time</label>
                            <input type="datetime-local" name="start_time" required
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">End Time</label>
                            <input type="datetime-local" name="end_time" required
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                    </div>

                    <input type="hidden" name="status" value="reserved">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-plus-circle"></i> Create Rental
                </button>
            </form>
        </div>
    </main>
=======
    <h1>Rent Equipment</h1>

    <form action="{{ route('equipment_rentals.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th>Equipment</th>
                <td>
                    <select name="equipment_id" required>
                        @foreach ($equipments as $equipment)
                            <option value="{{ $equipment->id }}">{{ $equipment->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>User</th>
                <td>
                    <select name="user_id" required>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>Start Time</th>
                <td><input type="datetime-local" name="start_time" required></td>
            </tr>
            <tr>
                <th>End Time</th>
                <td><input type="datetime-local" name="end_time" required></td>
            </tr>

            <input type="hidden" name="status" value="reserved">
        </table>

        <button type="submit">Create Rental</button>
    </form>

    <a href="{{ route('equipment_rentals.index') }}">Cancel</a>
>>>>>>> 07a1b80ba1e5bc6062338a3528c2866f5d67200e
</x-base-layout>
