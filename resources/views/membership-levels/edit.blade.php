<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Membership Level</h2>
                <a href="{{ route('membership-levels.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Membership Levels
                </a>
            </div>

            <!-- Form Section -->
            <form action="{{ route('membership-levels.update', $membershipLevel->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PATCH')
                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $membershipLevel->name) }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea name="description" id="description" rows="4" required
                                  class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">{{ old('description', $membershipLevel->description) }}</textarea>
                    </div>

                    <!-- Price -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                        <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $membershipLevel->price) }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Max Booking Days Ahead -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Max Booking Days Ahead</label>
                        <input type="number" name="max_booking_days_ahead" id="max_booking_days_ahead" value="{{ old('max_booking_days_ahead', $membershipLevel->max_booking_days_ahead) }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Max Booking Hours -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Max Booking Hours</label>
                        <input type="number" name="max_booking_hours" id="max_booking_hours" value="{{ old('max_booking_hours', $membershipLevel->max_booking_hours) }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Allow Guests -->
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="allow_guests" id="allow_guests" value="1" {{ old('allow_guests', $membershipLevel->allow_guests) ? 'checked' : '' }}
                               class="rounded border-gray-300 text-indigo-600 focus:ring-2 focus:ring-indigo-500" />
                        <label for="allow_guests" class="text-sm font-medium text-gray-700">Allow Guests</label>
                    </div>

                    <!-- Access Competitions -->
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="access_competitions" id="access_competitions" value="1" {{ old('access_competitions', $membershipLevel->access_competitions) ? 'checked' : '' }}
                               class="rounded border-gray-300 text-indigo-600 focus:ring-2 focus:ring-indigo-500" />
                        <label for="access_competitions" class="text-sm font-medium text-gray-700">Access Competitions</label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Update Membership Level
                </button>
            </form>
        </div>
    </main>
</x-base-layout>