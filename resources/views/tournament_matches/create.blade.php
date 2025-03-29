@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
        <div class="mb-3">
            <label for="player1_id" class="form-label">Player 1</label>
            <select name="player1_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="player2_id" class="form-label">Player 2</label>
            <select name="player2_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                @endforeach
            </select>
        </div>

        <input type="hidden" name="status" value="pending">


        <div class="form-group">
            <label for="scheduled_time">Scheduled Time</label>
            <input type="datetime-local" name="scheduled_time" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Create Match</button>
    </form>
</div>