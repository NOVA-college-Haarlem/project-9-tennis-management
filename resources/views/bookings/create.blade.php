<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">➕ Create New Booking</h2>
                <a href="{{ route('bookings.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Bookings
                </a>
            </div>

            <!-- Form Section -->
            <form action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- User Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">User</label>
                        <select name="user_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select User</option> <!-- Placeholder option -->
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" class="p-2">{{ $user->firstname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Court Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Court</label>
                        <select name="court_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select Court</option> <!-- Placeholder option -->
                            @foreach ($courts as $court)
                                <option value="{{ $court->id }}" class="p-2">{{ $court->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Date/Time Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Start Time</label>
                            <input type="datetime-local" name="start_time" 
                                   class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" 
                                   required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">End Time</label>
                            <input type="datetime-local" name="end_time" 
                                   class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" 
                                   required>
                        </div>
                    </div>

                    <!-- Booking Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Booking Type</label>
                        <select name="booking_type" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select Booking Type</option> <!-- Placeholder option -->
                            <option value="Regular">Regular</option>
                            <option value="Tournament">Tournament</option>
                            <option value="Training">Training</option>
                            <option value="Membership">Membership</option>
                            <option value="Guest">Guest</option>
                            <option value="Recurring">Recurring</option>
                        </select>
                    </div>

                    <input type="hidden" name="status" value="pending">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-calendar-plus"></i> Create Booking
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
