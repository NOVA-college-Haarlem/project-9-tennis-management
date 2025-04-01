<h1>Edit Competition Match</h1>
    <form action="{{ route('competition_matches.update', $competitionMatch) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Competition:</label>
        <select name="competition_id" class="form-control">
            @foreach($competitions as $competition)
                <option value="{{ $competition->id }}" {{ $competition->id == $competitionMatch->competition_id ? 'selected' : '' }}>{{ $competition->name }}</option>
            @endforeach
        </select>

        <label>Team 1:</label>
        <select name="team1_id" class="form-control">
            @foreach($teams as $team)
                <option value="{{ $team->id }}" {{ $team->id == $competitionMatch->team1_id ? 'selected' : '' }}>{{ $team->name }}</option>
            @endforeach
        </select>

        <label>Team 2:</label>
        <select name="team2_id" class="form-control">
            @foreach($teams as $team)
                <option value="{{ $team->id }}" {{ $team->id == $competitionMatch->team2_id ? 'selected' : '' }}>{{ $team->name }}</option>
            @endforeach
        </select>

        <label>Scheduled Time:</label>
        <input type="datetime-local" name="scheduled_time" class="form-control" value="{{ $competitionMatch->scheduled_time }}">
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>