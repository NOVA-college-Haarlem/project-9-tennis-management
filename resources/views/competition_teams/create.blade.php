<x-base-layout>
    <h1>Create Competition Team</h1>
    <form action="{{ route('competition_teams.store') }}" method="POST">
        @csrf
        <label>Team Name:</label>
        <select name="name">
            @foreach ($teams as $team)
                <option value="{{ $team->name }}">{{ $team->name }}</option>
            @endforeach
        </select>
        <label>Competition:</label>
        <select name="competition_id">
            @foreach ($competitions as $competition)
                <option value="{{ $competition->id }}">{{ $competition->name }}</option>
            @endforeach
        </select>
        <label>Captain:</label>
        <select name="captain_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</option>
            @endforeach
        </select>
        <button type="submit">Create</button>
    </form>
</x-base-layout>
