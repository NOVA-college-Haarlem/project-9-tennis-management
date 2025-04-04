<x-base-layout>
    <div class="container">
        <h2>Edit Tournament Match</h2>
        <form action="{{ route('tournament_matches.update', $tournament_match->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tournament_id">Tournament</label>
                <select name="tournament_id" class="form-control" required>
                    @foreach ($tournaments as $tournament)
                        <option value="{{ $tournament->id }}"
                            {{ old('tournament_id', $tournament_match->tournament_id) == $tournament->id ? 'selected' : '' }}>
                            {{ $tournament->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="scheduled_time">Scheduled Time</label>
                <input type="datetime-local" name="scheduled_time" class="form-control"
                    value="{{ old('scheduled_time', \Carbon\Carbon::parse($tournament_match->scheduled_time)->format('Y-m-d\TH:i')) }}"
                    required>
            </div>

            <div class="form-group">
                <label for="player1_id">Player 1</label>
                <select name="player1_id" class="form-control" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}"
                            {{ old('player1_id', $tournament_match->player1_id) == $user->id ? 'selected' : '' }}>
                            {{ $user->firstname }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="player2_id">Player 2</label>
                <select name="player2_id" class="form-control" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}"
                            {{ old('player2_id', $tournament_match->player2_id) == $user->id ? 'selected' : '' }}>
                            {{ $user->firstname }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required id="status" onchange="toggleScoreField()">
                    <option value="pending"
                        {{ old('status', $tournament_match->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="upcoming"
                        {{ old('status', $tournament_match->status) == 'upcoming' ? 'selected' : '' }}>Upcoming
                    </option>
                    <option value="completed"
                        {{ old('status', $tournament_match->status) == 'completed' ? 'selected' : '' }}>Completed
                    </option>
                    <option value="canceled"
                        {{ old('status', $tournament_match->status) == 'canceled' ? 'selected' : '' }}>Canceled
                    </option>
                </select>
            </div>


            <div class="form-group" id="score-field">
                <label for="player1_score">Player 1 Score</label>
                <input type="number" name="player1_score" class="form-control"
                    value="{{ old('player1_score', $tournament_match->player1_score) }}"
                    {{ $tournament_match->status == 'completed' ? '' : 'disabled' }}>

                <label for="player2_score">Player 2 Score</label>
                <input type="number" name="player2_score" class="form-control"
                    value="{{ old('player2_score', $tournament_match->player2_score) }}"
                    {{ $tournament_match->status == 'completed' ? '' : 'disabled' }}>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
    </div>

    <script>
        function toggleScoreField() {
            var status = document.getElementById('status').value;
            var scoreFields = document.getElementById('score-field');
            var player1Score = document.getElementsByName('player1_score')[0];
            var player2Score = document.getElementsByName('player2_score')[0];

            if (status !== 'completed') {
                scoreFields.style.display = 'none'; // Hide score fields if the match is not completed
                player1Score.disabled = true; // Disable the score inputs if the match is not completed
                player2Score.disabled = true;
            } else {
                scoreFields.style.display = 'block'; // Show score fields if the match is completed
                player1Score.disabled = false; // Enable the score inputs if the match is completed
                player2Score.disabled = false;
            }
        }

        window.onload = toggleScoreField; // Call the function on load to apply the current status
    </script>
    </form>
</x-base-layout>
