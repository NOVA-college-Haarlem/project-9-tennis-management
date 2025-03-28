<div class="container">
    <h2>Edit Tournament Registration</h2>
    <form action="{{ route('tournament_registrations.update', $registration->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $registration->user_id ? 'selected' : '' }}>
                        {{ $user->name }} (ID: {{ $user->id }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tournament_id">Tournament</label>
            <select name="tournament_id" class="form-control" required>
                @foreach ($tournaments as $tournament)
                    <option value="{{ $tournament->id }}" {{ $tournament->id == $registration->tournament_id ? 'selected' : '' }}>
                        {{ $tournament->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="registration_date">Registration Date</label>
            <input type="datetime-local" name="registration_date" class="form-control" value="{{ \Carbon\Carbon::parse($registration->registration_date)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="pending" {{ $registration->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ $registration->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="canceled" {{ $registration->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Update Registration</button>
    </form>
</div>