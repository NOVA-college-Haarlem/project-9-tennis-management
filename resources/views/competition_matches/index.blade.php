<h1>Competition Matches</h1>
    <a href="{{ route('competition_matches.create') }}" class="btn btn-primary">Create Match</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Competition</th>
                <th>Team 1</th>
                <th>Team 2</th>
                <th>Scheduled Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matches as $match)
                <tr>
                    <td>{{ $match->id }}</td>
                    <td>{{ $match->competition->name }}</td>
                    <td>{{ $match->team1->name }}</td>
                    <td>{{ $match->team2->name }}</td>
                    <td>{{ $match->scheduled_time }}</td>
                    <td>
                        <a href="{{ route('competition_matches.show', $match) }}" class="btn btn-info">View</a>
                        <a href="{{ route('competition_matches.edit', $match) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('competition_matches.destroy', $match) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>