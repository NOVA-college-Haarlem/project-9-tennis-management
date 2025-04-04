<x-base-layout>
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
                    <th>Status</th>
                    <th>Score</th> <!-- This column will show the score -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tournament_matches as $tournament_match)
                    <tr>
                        <td>{{ $tournament_match->id }}</td>
                        <td>{{ $tournament_match->tournament->name }}</td>
                        <td>{{ $tournament_match->scheduled_time }}</td>
                        <td>{{ $tournament_match->player1->firstname }} vs {{ $tournament_match->player2->firstname }}
                        </td>
                        <td>{{ $tournament_match->status }}</td>
                        <td>
                            @if ($tournament_match->status == 'completed')
                                {{ $tournament_match->player1->firstname }}: {{ $tournament_match->player1_score }} -
                                {{ $tournament_match->player2->firstname }}: {{ $tournament_match->player2_score }}
                            @else
                                The Match is Not Completed
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('tournament_matches.show', $tournament_match->id) }}"
                                class="btn btn-info">View</a>
                            <a href="{{ route('tournament_matches.edit', $tournament_match->id) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('tournament_matches.destroy', $tournament_match->id) }}"
                                method="POST" style="display:inline;">
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
</x-base-layout>
