<x-base-layout>
    <main class="container mx-auto my-12 px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-8">
                <h2 class="text-3xl font-bold text-gray-800 text-center sm:text-left">
                    📋 Tournament Registration Details
                </h2>
                <a href="{{ route('tournament_registrations.index') }}"
                    class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Registrations
                </a>
            </div>

            <!-- Registration Info Section -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                    <div class="space-y-4">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Registration ID</p>
                            <p class="font-medium text-indigo-600 text-lg">#{{ $registration->id }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">User</p>
                            <p class="font-medium text-gray-800 text-lg">
                                {{ $registration->user?->firstname ?? 'Unknown' }}
                                {{ $registration->user?->lastname ?? '' }}
                            </p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Tournament</p>
                            <p class="font-medium text-gray-800 text-lg">
                                {{ $registration->tournament?->name ?? 'Unknown' }}
                            </p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Registration Date</p>
                            <p class="font-medium text-gray-800 text-lg">
                                {{ $registration->registration_date }}
                            </p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Status</p>
                            <span class="inline-block mt-2 px-3 py-1 text-xs rounded-full bg-indigo-600 text-white">
                                {{ ucfirst($registration->status) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                <a href="{{ route('tournament_registrations.edit', $registration->id) }}"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center justify-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-pencil-alt"></i> <span>Edit Registration</span>
                </a>

                <form action="{{ route('tournament_registrations.destroy', $registration->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure?')" class="w-full sm:w-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="w-full bg-red-500 hover:bg-red-600 text-white px-3 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center justify-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash-alt"></i> <span>Delete Registration</span>
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-base-layout>
