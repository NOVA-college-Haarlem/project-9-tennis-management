<x-base-layout>
    <h1>Rental Details</h1>

    <table>
        <tr>
            <th>Equipment</th>
            <td>{{ $equipmentRental->equipment->name }}</td>
        </tr>
        <tr>
            <th>User</th>
            <td>{{ $equipmentRental->user->firstname }}</td>
        </tr>
        <tr>
            <th>Start Time</th>
            <td>{{ $equipmentRental->start_time }}</td>
        </tr>
        <tr>
            <th>End Time</th>
            <td>{{ $equipmentRental->end_time }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ ucfirst($equipmentRental->status) }}</td>
        </tr>
    </table>

    <a href="{{ route('equipment_rentals.index') }}">Back to Rentals</a>
    <a href="{{ route('equipment_rentals.edit', $equipmentRental) }}">Edit</a>

    <form action="{{ route('equipment_rentals.destroy', $equipmentRental) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</x-base-layout>
