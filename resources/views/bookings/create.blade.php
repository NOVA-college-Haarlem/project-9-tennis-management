<div class="container">
    <h2>Create Booking</h2>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select name="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="court_id" class="form-label">Court</label>
            <select name="court_id" class="form-control" required>
                @foreach($courts as $court)
                    <option value="{{ $court->id }}">{{ $court->name }}</option>
                @endforeach
            </select>
        </div> 

        <div class="mb-3">
            <label for="start_time" class="form-label">Start Time</label>
            <input type="datetime-local" name="start_time" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="end_time" class="form-label">End Time</label>
            <input type="datetime-local" name="end_time" class="form-control" required>
        </div>

        <input type="hidden" name="status" value="pending">


        {{-- <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="canceled">Canceled</option>
            </select>
        </div> --}}

        <div class="form-group">
            <label for="booking_type">Booking Type</label>
            <select name="booking_type" class="form-control">
                <option value="Regular">Regular</option>
                <option value="Tournament">Tournament</option>
                <option value="Training">Training</option>
                <option value="Membership">Membership</option>
                <option value="Guest">Guest</option>
                <option value="Recurring">Recurring</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create Booking</button>
    </form>
</div>
