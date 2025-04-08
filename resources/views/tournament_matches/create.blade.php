<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">➕ Create Tournament Match</h2>
                <a href="{{ route('tournament_matches.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Matches
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
            <form action="{{ route('tournament_matches.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Tournament Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tournament</label>
                        <select name="tournament_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                            @foreach ($tournaments as $tournament)
                                <option value="{{ $tournament->id }}">{{ $tournament->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Player 1 Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Player 1</label>
                        <select name="player1_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Player 2 Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Player 2</label>
                        <select name="player2_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Scheduled Time Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Scheduled Time</label>
                        <input type="datetime-local" name="scheduled_time" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                    </div>

                    <!-- Status Hidden Field -->
                    <input type="hidden" name="status" value="pending">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-calendar-plus"></i> Create Match
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
