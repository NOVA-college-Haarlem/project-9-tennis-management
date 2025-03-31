<x-base-layout>
    <h1 class="text-2xl font-bold mb-6">Edit Membership Level</h1>
    <form action="{{ route('membership-levels.update', $membershipLevel->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PATCH')

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{ $membershipLevel->name }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $membershipLevel->description }}</textarea>
        </div>

        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" name="price" id="price" step="0.01" value="{{ $membershipLevel->price }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div>
            <label for="max_booking_days_ahead" class="block text-sm font-medium text-gray-700">Max Booking Days
                Ahead</label>
            <input type="number" name="max_booking_days_ahead" id="max_booking_days_ahead"
                value="{{ $membershipLevel->max_booking_days_ahead }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div class="flex items-center">
            <input type="checkbox" name="allow_guests" id="allow_guests" value="1"
                {{ $membershipLevel->allow_guests ? 'checked' : '' }}
                class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
            <label for="allow_guests" class="ml-2 block text-sm text-gray-700">Allow Guests</label>
        </div>

        <div>
            <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Update
            </button>
        </div>
    </form>
</x-base-layout>
