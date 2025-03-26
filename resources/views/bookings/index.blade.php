
<div class="container">
    <h2>Bookings</h2>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">Create Booking</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                {{-- <th>User</th>
                <th>Court</th> --}}
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    {{-- <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->court->name }}</td> --}}
                    <td>{{ $booking->start_time }}</td>
                    <td>{{ $booking->end_time }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>{{ $booking->booking_type }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
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
