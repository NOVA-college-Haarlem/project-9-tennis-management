<div class="container">
    <h2>Edit Booking</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select name="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $booking->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->firstname }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="court_id" class="form-label">Court</label>
            <select name="court_id" class="form-control">
                @foreach ($courts as $court)
                    <option value="{{ $court->id }}" {{ $booking->court_id == $court->id ? 'selected' : '' }}>
                        {{ $court->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="start_time" class="form-label">Start Time</label>
            <input type="datetime-local" name="start_time" class="form-control" value="{{ $booking->start_time }}"
                required>
        </div>

        <div class="mb-3">
            <label for="end_time" class="form-label">End Time</label>
            <input type="datetime-local" name="end_time" class="form-control" value="{{ $booking->end_time }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="canceled" {{ $booking->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
            </select>
        </div>

        <div class="form-group">
            <label for="booking_type">Booking Type</label>
            <select name="booking_type" id="booking_type" class="form-control">
                <option value="Regular"
                    {{ old('booking_type', $booking->booking_type ?? '') == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Tournament"
                    {{ old('booking_type', $booking->booking_type ?? '') == 'Tournament' ? 'selected' : '' }}>
                    Tournament</option>
                <option value="Training"
                    {{ old('booking_type', $booking->booking_type ?? '') == 'Training' ? 'selected' : '' }}>Training
                </option>
                <option value="Membership"
                    {{ old('booking_type', $booking->booking_type ?? '') == 'Membership' ? 'selected' : '' }}>
                    Membership</option>
                <option value="Guest"
                    {{ old('booking_type', $booking->booking_type ?? '') == 'Guest' ? 'selected' : '' }}>Guest</option>
                <option value="Recurring"
                    {{ old('booking_type', $booking->booking_type ?? '') == 'Recurring' ? 'selected' : '' }}>Recurring
                </option>
            </select>
        </div>


        <button type="submit" class="btn btn-warning">Update Booking</button>
    </form>
</div>
