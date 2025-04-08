<x-base-layout>
    <h1>Create Membership Level</h1>
    <form action="{{ route('membership-levels.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01">
        <label for="max_booking_days_ahead">Max Booking Days Ahead:</label>
        <input type="number" name="max_booking_days_ahead" id="max_booking_days_ahead">
        <label for="max_booking_hours">Max Booking Hours:</label>
        <input type="number" name="max_booking_hours" id="max_booking_hours">
        <label for="allow_guests">Allow Guests:</label>
        <input type="checkbox" name="allow_guests" id="allow_guests" value="1">
        <label for="access_competitions">Access Competitions:</label>
        <input type="checkbox" name="access_competitions" id="access_competitions" value="1">
        <button type="submit">Create</button>
    </form>
</x-base-layout>
