<h1>Membership Level Details</h1>
<p>Name: {{ $membershipLevel->name }}</p>
<p>Description: {{ $membershipLevel->description }}</p>
<p>Duration: {{$membershipLevel->duration}} {{$membershipLevel->duration > 1 ? $membershipLevel->duration_unit . 's' : $membershipLevel->duration_unit}}</p>
<p>Price: €{{ $membershipLevel->price }}</p>
<p>Max Booking Days Ahead: {{ $membershipLevel->max_booking_days_ahead }}</p>
<p>Max Booking Hours: {{ $membershipLevel->max_booking_hours }}</p>
<p>Allow Guests: {{ $membershipLevel->allow_guests ? 'Yes' : 'No' }}</p>
<p>Access Competitions: {{ $membershipLevel->access_competitions ? 'Yes' : 'No' }}</p>
<a href="{{ route('membership-levels.edit', $membershipLevel->id) }}">Edit</a>
<form action="{{ route('membership-levels.destroy', $membershipLevel->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>