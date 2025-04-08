<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Membership Level</h2>
                <a href="{{ route('membership-levels.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Membership Levels
                </a>
            </div>

            <form action="{{ route('membership-levels.update', $membershipLevel->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PATCH')

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" id="name" value="{{ $membershipLevel->name }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea name="description" id="description" rows="4" required
                                  class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">{{ $membershipLevel->description }}</textarea>
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                        <input type="number" name="price" id="price" step="0.01" value="{{ $membershipLevel->price }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                    </div>

                    <div>
                        <label for="max_booking_days_ahead" class="block text-sm font-medium text-gray-700 mb-1">Max Booking Days Ahead</label>
                        <input type="number" name="max_booking_days_ahead" id="max_booking_days_ahead" value="{{ $membershipLevel->max_booking_days_ahead }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                    </div>

                    <div>
                        <label for="max_booking_hours" class="block text-sm font-medium text-gray-700 mb-1">Max Booking Hours</label>
                        <input type="number" name="max_booking_hours" id="max_booking_hours" value="{{ $membershipLevel->max_booking_hours }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                    </div>

                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="allow_guests" id="allow_guests" value="1" {{ $membershipLevel->allow_guests ? 'checked' : '' }}
                               class="h-5 w-5 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="allow_guests" class="text-sm font-medium text-gray-700">Allow Guests</label>
                    </div>

                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="access_competitions" id="access_competitions" value="1" {{ $membershipLevel->access_competitions ? 'checked' : '' }}
                               class="h-5 w-5 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="access_competitions" class="text-sm font-medium text-gray-700">Access Competitions</label>
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Update Membership Level
                </button>
            </form>
        </div>
    </main>
</x-base-layout>