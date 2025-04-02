<h1>Competition Teams</h1>
<a href="{{ route('competition_teams.create') }}">Create New Team</a>
<table>
    <tr>
        <th>Name</th>
        <th>Competition</th>
        <th>Captain</th>
        <th>Actions</th>
    </tr>
    @foreach($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->competition->name }}</td>
            <td>{{ $team->captain->firstname }} {{ $team->captain->lastname }}</td>
            <td>
                <a href="{{ route('competition_teams.show', $team) }}">View</a>
                <a href="{{ route('competition_teams.edit', $team) }}">Edit</a>
                <form action="{{ route('competition_teams.destroy', $team) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>