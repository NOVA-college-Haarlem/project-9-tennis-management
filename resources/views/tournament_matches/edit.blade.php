<div class="container">
    <h2>Edit Tournament Match</h2>
    <form action="{{ route('tournament_matches.update', $match->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="tournament_id">Tournament</label>
            <select name="tournament_id" class="form-control" required>
                @foreach ($tournaments as $tournament)
                    <option value="{{ $tournament->id }}" {{ $tournament->id == $match->tournament_id ? 'selected' : '' }}>
                        {{ $tournament->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="scheduled_time">Scheduled Time</label>
            <input type="datetime-local" name="scheduled_time" class="form-control" value="{{ \Carbon\Carbon::parse($match->scheduled_time)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label for="player1_id">Player 1 ID</label>
            <input type="number" name="player1_id" class="form-control" value="{{ $match->player1_id }}" required>
        </div>

        <div class="form-group">
            <label for="player2_id">Player 2 ID</label>
            <input type="number" name="player2_id" class="form-control" value="{{ $match->player2_id }}" required>
        </div>

        <div class="form-group">
            <label for="score">Score</label>
            <input type="text" name="score" class="form-control" value="{{ $match->score }}">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="scheduled" {{ $match->status == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                <option value="completed" {{ $match->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="canceled" {{ $match->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Update Match</button>
    </form>
</div>