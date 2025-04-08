<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <div class="max-w-6xl mx-auto space-y-6">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 flex items-center gap-2">
                        🏟️ <span>Tournaments</span>
                    </h2>

                    <!-- Action Buttons -->
                    <div class="flex gap-4 justify-end w-full">
                        <!-- Tournament Matches -->
                        <a href="{{ route('tournament_matches.index') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-futbol text-sm"></i> <span>Tournament Matches</span>
                        </a>

                        <!-- Tournament Registrations -->
                        <a href="{{ route('tournament_registrations.index') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-clipboard-list text-sm"></i> <span>Tournament Registrations</span>
                        </a>

                        <!-- Create Tournament -->
                        <a href="{{ route('tournaments.create') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-plus text-sm"></i> <span>Create Tournament</span>
                        </a>
                    </div>
                </div>

                @foreach($tournaments as $tournament)
                    <div class="bg-indigo-50 shadow-lg rounded-2xl p-6 hover:shadow-2xl transition duration-300">
                        <div class="flex flex-col h-full">
                            <!-- Tournament Info -->
                            <div class="space-y-2 mb-4">
                                <p class="text-lg font-semibold text-gray-800">{{ $tournament->name }}</p>
                                <p class="text-sm text-gray-600"><strong>Start Date:</strong> <span class="font-medium text-gray-800">{{ $tournament->start_date }}</span></p>
                                <p class="text-sm text-gray-600"><strong>End Date:</strong> <span class="font-medium text-gray-800">{{ $tournament->end_date }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Status:</strong>
                                    <span class="inline-block mt-1 px-3 py-1 text-xs rounded-full 
                                        {{ $tournament->status === 'active' ? 'bg-green-600 text-green-100' : 
                                           ($tournament->status === 'upcoming' ? 'bg-yellow-600 text-yellow-100' : 
                                           'bg-red-600 text-red-100') }}">
                                        {{ ucfirst($tournament->status) }}
                                    </span>
                                </p>
                            </div>

                            <!-- Action Buttons -->
                            <div class="mt-auto pt-4 flex flex-wrap gap-2 border-t border-indigo-100">
                                <a href="{{ route('tournaments.show', $tournament->id) }}"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-eye text-sm"></i> <span class="text-sm">View</span>
                                </a>
                                <a href="{{ route('tournaments.edit', $tournament->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-pencil-alt text-sm"></i> <span class="text-sm">Edit</span>
                                </a>
                                <form action="{{ route('tournaments.destroy', $tournament->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this tournament?')">
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
