<div class="container">
    <h2>Tournament Match Details</h2>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $tournament_match->id }}</td>
        </tr>
        <tr>
            <th>Tournament:</th>
            <td>{{ $tournament_match->tournament->name }}</td>
        </tr>
        <tr>
            <th>Scheduled Time:</th>
            <td>{{ $tournament_match->scheduled_time }}</td>
        </tr>
        <tr>
            <th>Players:</th>
            <td>{{ $tournament_match->player1->firstname }} vs {{ $tournament_match->player2->firstname }}</td>
        </tr>
        <tr>
            {{-- <th>Score:</th>
            <td>{{ $tournament_match->score ?? 'N/A' }}</td>
        </tr> --}}
        <tr>
            <th>Status:</th>
            <td>{{ ucfirst($tournament_match->status) }}</td>
        </tr>
    </table>

    <a href="{{ route('tournament_matches.edit', $tournament_match->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('tournament_matches.index') }}" class="btn btn-secondary">Back to Matches</a>
</div>
