<x-base-layout>
    <div class="container">
        <h2>Booking Details</h2>
        <p><strong>ID:</strong> {{ $booking->id }}</p>
        <p><strong>User:</strong> {{ $booking->user->firstname }}</p>
        <p><strong>Court:</strong> {{ $booking->court->name }}</p>
        <p><strong>Start Time:</strong> {{ $booking->start_time }}</p>
        <p><strong>End Time:</strong> {{ $booking->end_time }}</p>
        <p><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>
        <p><strong>Booking Type:</strong> {{ $booking->booking_type }}</p>

        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Back</a>
    </div>
</x-base-layout>
