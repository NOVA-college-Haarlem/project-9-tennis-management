<h1>Create Competition Match</h1>
    <form action="{{ route('competition_matches.store') }}" method="POST">
        @csrf
        <label>Competition:</label>
        <select name="competition_id" class="form-control">
            @foreach($competitions as $competition)
                <option value="{{ $competition->id }}">{{ $competition->name }}</option>
            @endforeach
        </select>

        <label>Team 1:</label>
        <select name="team1_id" class="form-control">
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>

        <label>Team 2:</label>
        <select name="team2_id" class="form-control">
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>

        <label>Scheduled Time:</label>
        <input type="datetime-local" name="scheduled_time" class="form-control">
        
        <button type="submit" class="btn btn-success">Create</button>
    </form>