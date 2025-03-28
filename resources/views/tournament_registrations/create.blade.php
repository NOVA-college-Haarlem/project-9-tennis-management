<div class="container">
    <h2>Register for Tournament</h2>
    <form action="{{ route('tournament_registrations.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} (ID: {{ $user->id }})</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tournament_id">Tournament</label>
            <select name="tournament_id" class="form-control" required>
                @foreach ($tournaments as $tournament)
                    <option value="{{ $tournament->id }}">{{ $tournament->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="registration_date">Registration Date</label>
            <input type="datetime-local" name="registration_date" class="form-control" value="{{ now()->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="canceled">Canceled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Register</button>
    </form>
</div>