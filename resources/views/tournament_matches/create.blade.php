<div class="container">
    <h2>Create Tournament Match</h2>
    <form action="{{ route('tournament_matches.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tournament_id">Tournament</label>
            <select name="tournament_id" class="form-control" required>
                @foreach ($tournaments as $tournament)
                    <option value="{{ $tournament->id }}">{{ $tournament->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="scheduled_time">Scheduled Time</label>
            <input type="datetime-local" name="scheduled_time" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="player1_id">Player 1 ID</label>
            <input type="number" name="player1_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="player2_id">Player 2 ID</label>
            <input type="number" name="player2_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Create Match</button>
    </form>
</div>