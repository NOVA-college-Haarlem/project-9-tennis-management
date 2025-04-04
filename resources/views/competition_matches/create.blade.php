<x-base-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Create Competition Match</h1>
    <form action="{{ route('competition_matches.store') }}" method="POST">
        @csrf
        <label>Competition:</label>
        <select name="competition_id">
            @foreach ($competitions as $competition)
                <option value="{{ $competition->id }}">{{ $competition->name }}</option>
            @endforeach
        </select>
        <label>Team 1:</label>
        <select name="team1_id">
            @foreach ($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
        <label>Team 2:</label>
        <select name="team2_id">
            @foreach ($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
        <label>Court:</label>
        <select name="court_id">
            @foreach ($courts as $court)
                <option value="{{ $court->id }}">{{ $court->name }}</option>
            @endforeach
        </select>

        <input type="hidden" name="status" value="scheduled">

        <label>Scheduled Time:</label>
        <input type="datetime-local" name="scheduled_time" required>
        <button type="submit">Create</button>
    </form>
</x-base-layout>
