<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Booking</h2>
                <a href="{{ route('bookings.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Bookings
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
            <form action="{{ route('bookings.update', $booking->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- User Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Player</label>
                        <select name="user_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled>Select User</option> <!-- Placeholder option -->
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $booking->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->firstname }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Court Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Court</label>
                        <select name="court_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled>Select Court</option> <!-- Placeholder option -->
                            @foreach ($courts as $court)
                                <option value="{{ $court->id }}" {{ $booking->court_id == $court->id ? 'selected' : '' }}>
                                    {{ $court->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Date/Time Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Start Time</label>
                            <input type="datetime-local" name="start_time" 
                                   class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" 
                                   value="{{ $booking->start_time }}" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">End Time</label>
                            <input type="datetime-local" name="end_time" 
                                   class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" 
                                   value="{{ $booking->end_time }}" required>
                        </div>
                    </div>

                    <!-- Booking Type Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Booking Type</label>
                        <select name="booking_type" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="Regular" {{ $booking->booking_type == 'Regular' ? 'selected' : '' }}>Regular</option>
                            <option value="Tournament" {{ $booking->booking_type == 'Tournament' ? 'selected' : '' }}>Tournament</option>
                            <option value="Training" {{ $booking->booking_type == 'Training' ? 'selected' : '' }}>Training</option>
                            <option value="Membership" {{ $booking->booking_type == 'Membership' ? 'selected' : '' }}>Membership</option>
                            <option value="Guest" {{ $booking->booking_type == 'Guest' ? 'selected' : '' }}>Guest</option>
                            <option value="Recurring" {{ $booking->booking_type == 'Recurring' ? 'selected' : '' }}>Recurring</option>
                        </select>
                    </div>

                    <!-- Status Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                            <option value="canceled" {{ $booking->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-calendar-check"></i> Update Booking
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
