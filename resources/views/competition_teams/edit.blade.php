<x-base-layout>
    <h1>Edit Competition Team</h1>
    <form action="{{ route('competition_teams.update', $competitionTeam) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Team Name:</label>
        <select name="name">
            @foreach ($teams as $team)
                <option value="{{ $team->name }}" {{ $competitionTeam->name == $team->name ? 'selected' : '' }}>
                    {{ $team->name }}</option>
            @endforeach
        </select>
        <label>Competition:</label>
        <select name="competition_id">
            @foreach ($competitions as $competition)
                <option value="{{ $competition->id }}"
                    {{ $competitionTeam->competition_id == $competition->id ? 'selected' : '' }}>
                    {{ $competition->name }}</option>
            @endforeach
        </select>
        <label>Captain:</label>
        <select name="captain_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $competitionTeam->captain_id == $user->id ? 'selected' : '' }}>
                    {{ $user->firstname }} {{ $user->lastname }}</option>
            @endforeach
        </select>
        <button type="submit">Update</button>
    </form>
</x-base-layout>
