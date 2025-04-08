<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">🏟️ {{ $tournament->name }}</h2>
                <a href="{{ route('tournaments.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Tournaments
                </a>
            </div>

            <!-- Details Section -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-4 text-gray-800">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-500">Description</p>
                        <p class="text-lg font-medium">{{ $tournament->description }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Start Date</p>
                        <p class="text-lg font-medium">{{ $tournament->start_date }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">End Date</p>
                        <p class="text-lg font-medium">{{ $tournament->end_date }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Min Skill Level</p>
                        <p class="text-lg font-medium">{{ $tournament->min_skill_level }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Max Skill Level</p>
                        <p class="text-lg font-medium">{{ $tournament->max_skill_level }}</p>
                    </div>
                    {{-- <div>
                        <p class="text-sm text-gray-500">Format</p>
                        <p class="text-lg font-medium">{{ ucfirst($tournament->format) }}</p>
                    </div> --}}
                    <div>
                        <p class="text-sm text-gray-500">Entry Fee</p>
                        <p class="text-lg font-medium">${{ $tournament->entry_fee }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <span class="inline-block mt-2 px-3 py-1 text-xs rounded-full 
                            {{ $tournament->status === 'completed' ? 'bg-green-600 text-green-100' : 
                               ($tournament->status === 'active' ? 'bg-yellow-600 text-yellow-100' : 
                               'bg-gray-500 text-white') }}">
                            {{ ucfirst($tournament->status) }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('tournaments.edit', $tournament->id) }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-edit"></i> Edit
                </a>

                <form action="{{ route('tournaments.destroy', $tournament->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this tournament?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-base-layout>
