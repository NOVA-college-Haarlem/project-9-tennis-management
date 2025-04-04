<x-base-layout>
    <h1>Edit Competition Match</h1>
    <form action="{{ route('competition_matches.update', $competitionMatch) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Competition:</label>
        <select name="competition_id">
            @foreach ($competitions as $competition)
                <option value="{{ $competition->id }}"
                    {{ $competitionMatch->competition_id == $competition->id ? 'selected' : '' }}>
                    {{ $competition->name }}</option>
            @endforeach
        </select>
        <label>Team 1:</label>
        <select name="team1_id">
            @foreach ($teams as $team)
                <option value="{{ $team->id }}" {{ $competitionMatch->team1_id == $team->id ? 'selected' : '' }}>
                    {{ $team->name }}</option>
            @endforeach
        </select>
        <label>Team 2:</label>
        <select name="team2_id">
            @foreach ($teams as $team)
                <option value="{{ $team->id }}" {{ $competitionMatch->team2_id == $team->id ? 'selected' : '' }}>
                    {{ $team->name }}</option>
            @endforeach
        </select>

        <label>Court:</label>
        <select name="court_id">
            @foreach ($courts as $court)
                <option value="{{ $court->id }}" {{ $competitionMatch->court_id == $court->id ? 'selected' : '' }}>
                    {{ $court->name }}</option>
            @endforeach
        </select>

        <label>Status:</label>
        <select name="status">
            <option value="scheduled" {{ $competitionMatch->status == 'scheduled' ? 'selected' : '' }}>Scheduled
            </option>
            <option value="completed" {{ $competitionMatch->status == 'completed' ? 'selected' : '' }}>Completed
            </option>
            <option value="canceled" {{ $competitionMatch->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
        </select>

        <label>Scheduled Time:</label>
        <input type="datetime-local" name="scheduled_time" value="{{ $competitionMatch->scheduled_time }}" required>
        <button type="submit">Update</button>
    </form>
</x-base-layout>
