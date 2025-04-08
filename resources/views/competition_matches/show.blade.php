<x-base-layout>
<<<<<<< HEAD
    <main class="container mx-auto my-12 px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800 text-center sm:text-left">🏆 Match Details</h2>
                <a href="{{ route('competition_matches.index') }}"
                    class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Matches
                </a>
            </div>

            <!-- Match Info Section -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                    <div class="space-y-4">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Competition</p>
                            <p class="font-medium text-indigo-600 text-lg">{{ $competitionMatch->competition->name }}
                            </p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Team 1</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $competitionMatch->team1->name }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Court</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $competitionMatch->court->name }}</p>
                        </div>
                    </div>

                    <div class="space-y-4">

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Scheduled Time</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $competitionMatch->scheduled_time }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Team 2</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $competitionMatch->team2->name }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Status</p>
                            <span
                                class="inline-block mt-2 px-3 py-1 text-xs rounded-full
                                {{ $competitionMatch->status === 'active'
                                    ? 'bg-green-600 text-green-100'
                                    : ($competitionMatch->status === 'upcoming'
                                        ? 'bg-yellow-600 text-yellow-100'
                                        : 'bg-red-600 text-red-100') }}">
                                {{ ucfirst($competitionMatch->status) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                <a href="{{ route('competition_matches.edit', $competitionMatch->id) }}"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center justify-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-pencil-alt"></i> <span>Edit Match</span>
                </a>

                <form action="{{ route('competition_matches.destroy', $competitionMatch->id) }}" method="POST"
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
=======
    <h1>Match Details</h1>
    <p>Competition: {{ $competitionMatch->competition->name }}</p>
    <p>Team 1: {{ $competitionMatch->team1->name }}</p>
    <p>Team 2: {{ $competitionMatch->team2->name }}</p>
    <p>Scheduled Time: {{ $competitionMatch->scheduled_time }}</p>
    <p>Court: {{ $competitionMatch->court->name }}</p>
    <p>Status: {{ $competitionMatch->status }}</p>
    <a href="{{ route('competition_matches.index') }}">Back</a>
>>>>>>> 07a1b80ba1e5bc6062338a3528c2866f5d67200e
</x-base-layout>
