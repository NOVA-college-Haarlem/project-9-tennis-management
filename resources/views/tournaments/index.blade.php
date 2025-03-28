<div class="container">
    <h1>Tournaments</h1>
    <a href="{{ route('tournaments.create') }}" class="btn btn-primary">Create Tournament</a>
    <table class="table">
        <thead>
            <tr><th>Name</th><th>Start Date</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($tournaments as $tournament)
                <tr>
                    <td>{{ $tournament->name }}</td>
                    <td>{{ $tournament->start_date }}</td>
                    <td>
                        <a href="{{ route('tournaments.show', $tournament) }}" class="btn btn-info">View</a>
                        <a href="{{ route('tournaments.edit', $tournament) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>