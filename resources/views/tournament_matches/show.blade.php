<x-base-layout>
    <main class="container mx-auto my-12 px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800 text-center sm:text-left">🏆 Tournament Match Details</h2>
                <a href="{{ route('tournament_matches.index') }}"
                    class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Matches
                </a>
            </div>

            <!-- Match Info Section -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                    <div class="space-y-4">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Tournament</p>
                            <p class="font-medium text-indigo-600 text-lg">{{ $tournament_match->tournament->name }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Player 1</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $tournament_match->player1->firstname }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Player 2</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $tournament_match->player2->firstname }}</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Scheduled Time</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $tournament_match->scheduled_time }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Status</p>
                            <span class="inline-block mt-2 px-3 py-1 text-xs rounded-full
                                {{ $tournament_match->status === 'completed'
                                    ? 'bg-green-600 text-green-100'
                                    : ($tournament_match->status === 'upcoming'
                                        ? 'bg-yellow-600 text-yellow-100'
                                        : 'bg-red-600 text-red-100') }}">
                                {{ ucfirst($tournament_match->status) }}
                            </span>
                        </div>

                        <!-- Score Section -->
                        @if ($tournament_match->status === 'completed')
                            <div class="text-center md:text-left">
                                <p class="text-sm text-gray-500">Score</p>
                                <p class="font-medium text-gray-800 text-lg">
                                    {{ $tournament_match->player1->firstname }}: 
                                    {{ $tournament_match->player1_score }} - 
                                    {{ $tournament_match->player2->firstname }}: 
                                    {{ $tournament_match->player2_score }}
                                </p>
                            </div>
                        @else
                            <div class="text-center md:text-left">
                                <p class="text-sm text-gray-500">Score</p>
                                <p class="font-medium text-gray-800 text-lg">Match not completed</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                <a href="{{ route('tournament_matches.edit', $tournament_match->id) }}"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center justify-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-pencil-alt"></i> <span>Edit Match</span>
                </a>

                <form action="{{ route('tournament_matches.destroy', $tournament_match->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure?')" class="w-full sm:w-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="w-full bg-red-500 hover:bg-red-600 text-white px-3 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center justify-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash-alt"></i> <span>Delete Match</span>
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-base-layout>
