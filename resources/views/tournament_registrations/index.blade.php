<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Registrations</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Tournament Registrations</h2>
        <a href="{{ route('tournament_registrations.create') }}" class="btn btn-primary mb-3">Register for Tournament</a>
        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Tournament</th>
                    <th>Registration Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrations as $registration)
                    <tr>
                        <td>{{ $registration->id }}</td>
                        <td>{{ $registration->user->firstname }}</td>
                        <td>{{ $registration->tournament->name }}</td>
                        <td>{{ $registration->registration_date }}</td>
                        <td>{{ ucfirst($registration->status) }}</td>
                        <td>
                            <a href="{{ route('tournament_registrations.show', $registration->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('tournament_registrations.edit', $registration->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tournament_registrations.destroy', $registration->id) }}" method="POST" class="d-inline">
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