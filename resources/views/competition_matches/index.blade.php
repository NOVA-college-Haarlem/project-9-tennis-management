<h1>Competition Matches</h1>
    <a href="{{ route('competition_matches.create') }}">Create New Match</a>
    <table>
        <tr>
            <th>Competition</th>
            <th>Team 1</th>
            <th>Team 2</th>
            <th>Scheduled Time</th>
            <th>Court</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach($matches as $match)
            <tr>
                <td>{{ $match->competition->name }}</td>
                <td>{{ $match->team1->name }}</td>
                <td>{{ $match->team2->name }}</td>
                <td>{{ $match->scheduled_time }}</td>
                <td>{{ $match->court->name}}</td>
                <td>{{ $match->status }}</td>
                <td>
                    <a href="{{ route('competition_matches.show', $match) }}">View</a>
                    <a href="{{ route('competition_matches.edit', $match) }}">Edit</a>
                    <form action="{{ route('competition_matches.destroy', $match) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>