<h1>Edit Membership Level</h1>
<form action="{{ route('membership-levels.update', $membershipLevel->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $membershipLevel->name }}">
    <label for="description">Description:</label>
    <textarea name="description" id="description">{{ $membershipLevel->description }}</textarea>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" value="{{ $membershipLevel->price }}">
    <label for="max_booking_days_ahead">Max Booking Days Ahead:</label>
    <input type="number" name="max_booking_days_ahead" id="max_booking_days_ahead" value="{{ $membershipLevel->max_booking_days_ahead }}">
    <label for="allow_guests">Allow Guests:</label>
    <input type="checkbox" name="allow_guests" id="allow_guests" value="1" {{ $membershipLevel->allow_guests ? 'checked' : '' }}>
    <button type="submit">Update</button>
</form>