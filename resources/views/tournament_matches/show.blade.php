<div class="container">
    <h2>Tournament Match Details</h2>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $match->id }}</td>
        </tr>
        <tr>
            <th>Tournament:</th>
            <td>{{ $match->tournament->name }}</td>
        </tr>
        <tr>
            <th>Scheduled Time:</th>
            <td>{{ $match->scheduled_time }}</td>
        </tr>
        <tr>
            <th>Players:</th>
            <td>{{ $match->player1_id }} vs {{ $match->player2_id }}</td>
        </tr>
        <tr>
            <th>Score:</th>
            <td>{{ $match->score ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Status:</th>
            <td>{{ ucfirst($match->status) }}</td>
        </tr>
    </table>

    <a href="{{ route('tournament_matches.edit', $match->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('tournament_matches.destroy', $match->id) }}" method="POST" style="display:inline;">
        @csrf @method('DELETE')
        <button type="submit" class="btn btn-danger"
            onclick="return confirm('Are you sure?')">Delete</button>
    </form>
    <a href="{{ route('tournament_matches.index') }}" class="btn btn-secondary">Back to Matches</a>
</div>