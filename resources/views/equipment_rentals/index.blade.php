<x-base-layout>
    <h1>Equipment Rentals</h1>
    <a href="{{ route('equipment_rentals.create') }}">Rent Equipment</a>

    <table>
        <tr>
            <th>Equipment</th>
            <th>User</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach ($rentals as $rental)
            <tr>
                <td>{{ $rental->equipment->name }}</td>
                <td>{{ $rental->user->firstname }}</td>
                <td>{{ $rental->start_time }}</td>
                <td>{{ $rental->end_time }}</td>
                <td>{{ ucfirst($rental->status) }}</td>
                <td>
                    <a href="{{ route('equipment_rentals.show', $rental) }}">View</a>
                    <a href="{{ route('equipment_rentals.edit', $rental) }}">Edit</a>
                    <form action="{{ route('equipment_rentals.destroy', $rental) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-base-layout>
