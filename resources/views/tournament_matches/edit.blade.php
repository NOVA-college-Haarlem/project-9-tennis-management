<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Tournament Match</h2>
                <a href="{{ route('tournament_matches.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Matches
                </a>
            </div>

            <!-- Error Display -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-600 p-4 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>⚠️ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('tournament_matches.update', $tournament_match->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tournament</label>
                        <select name="tournament_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                            @foreach ($tournaments as $tournament)
                                <option value="{{ $tournament->id }}" {{ old('tournament_id', $tournament_match->tournament_id) == $tournament->id ? 'selected' : '' }}>
                                    {{ $tournament->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Scheduled Time</label>
                        <input type="datetime-local" name="scheduled_time" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" value="{{ old('scheduled_time', \Carbon\Carbon::parse($tournament_match->scheduled_time)->format('Y-m-d\TH:i')) }}" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Player 1</label>
                        <select name="player1_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ old('player1_id', $tournament_match->player1_id) == $user->id ? 'selected' : '' }}>
                                    {{ $user->firstname }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Player 2</label>
                        <select name="player2_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ old('player2_id', $tournament_match->player2_id) == $user->id ? 'selected' : '' }}>
                                    {{ $user->firstname }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required id="status" onchange="toggleScoreField()">
                            <option value="pending" {{ old('status', $tournament_match->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="upcoming" {{ old('status', $tournament_match->status) == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                            <option value="completed" {{ old('status', $tournament_match->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="canceled" {{ old('status', $tournament_match->status) == 'canceled' ? 'selected' : '' }}>Canceled</option>
                        </select>
                    </div>

                    <div class="form-group" id="score-field">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Player 1 Score</label>
                            <input type="number" name="player1_score" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" value="{{ old('player1_score', $tournament_match->player1_score) }}" {{ $tournament_match->status == 'completed' ? '' : 'disabled' }}>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Player 2 Score</label>
                            <input type="number" name="player2_score" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" value="{{ old('player2_score', $tournament_match->player2_score) }}" {{ $tournament_match->status == 'completed' ? '' : 'disabled' }}>
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Update Match
                </button>
            </form>
        </div>
    </main>

    <script>
        function toggleScoreField() {
            var status = document.getElementById('status').value;
            var scoreFields = document.getElementById('score-field');
            var player1Score = document.getElementsByName('player1_score')[0];
            var player2Score = document.getElementsByName('player2_score')[0];

            if (status !== 'completed') {
                scoreFields.style.display = 'none';  // Hide score fields if the match is not completed
                player1Score.disabled = true;        // Disable the score inputs if the match is not completed
                player2Score.disabled = true;
            } else {
                scoreFields.style.display = 'block'; // Show score fields if the match is completed
                player1Score.disabled = false;       // Enable the score inputs if the match is completed
                player2Score.disabled = false;
            }
        }

        window.onload = toggleScoreField; // Call the function on load to apply the current status
    </script>
</x-base-layout>
