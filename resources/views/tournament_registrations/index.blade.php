<div class="container">
    <h2>Tournament Matches</h2>
    <a href="{{ route('tournament_matches.create') }}" class="btn btn-primary">Create Match</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tournament</th>
                <th>Scheduled Time</th>
                <th>Players</th>
                <th>Score</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matches as $match)
                <tr>
                    <td>{{ $match->id }}</td>
                    <td>{{ $match->tournament->name }}</td>
                    <td>{{ $match->scheduled_time }}</td>
                    <td>{{ $match->player1_id }} vs {{ $match->player2_id }}</td>
                    <td>{{ $match->score ?? 'N/A' }}</td>
                    <td>{{ $match->status }}</td>
                    <td>
                        <a href="{{ route('tournament_matches.show', $match->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('tournament_matches.edit', $match->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tournament_matches.destroy', $match->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>