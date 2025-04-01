<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournaments</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tournaments</h1>
        <a href="{{ route('tournaments.create') }}" class="btn btn-primary mb-3">Create Tournament</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tournaments as $tournament)
                    <tr>
                        <td>{{ $tournament->id }}</td>
                        <td>{{ $tournament->name }}</td>
                        <td>{{ $tournament->start_date }}</td>
                        <td>{{ $tournament->end_date }}</td>
                        <td>{{ ucfirst($tournament->status) }}</td>
                        <td>
                            <a href="{{ route('tournaments.show', $tournament) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('tournaments.edit', $tournament) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tournaments.destroy', $tournament) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
