<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Tournament</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Register for a Tournament</h2>
        <a href="{{ route('tournament_registrations.index') }}" class="btn btn-secondary mb-3">Back</a>

        <form action="{{ route('tournament_registrations.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">User</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    <option value="">Select User</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tournament_id" class="form-label">Tournament</label>
                <select name="tournament_id" id="tournament_id" class="form-control" required>
                    <option value="">Select Tournament</option>
                    @foreach($tournaments as $tournament)
                        <option value="{{ $tournament->id }}">{{ $tournament->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="registration_date" class="form-label">Registration Date</label>
                <input type="date" name="registration_date" id="registration_date" class="form-control" required>
            </div>
            
            <input type="hidden" name="status" value="registered">


            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>
</html>
