<x-base-layout>
    <h1>Equipment List</h1>
    <a href="{{ route('equipments.create') }}">Add New Equipment</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Condition</th>
            <th>Availability</th>
            <th>Rental Fee</th>
            <th>Actions</th>
        </tr>
        @foreach ($equipments as $equipment)
            <tr>
                <td>{{ $equipment->name }}</td>
                <td>{{ $equipment->type }}</td>
                <td>{{ ucfirst($equipment->condition) }}</td>
                <td>{{ $equipment->available ? 'Available' : 'Not Available' }}</td>
                <td>${{ number_format($equipment->rental_fee, 2) }}</td>
                <td>
                    <a href="{{ route('equipments.show', $equipment) }}">View</a>
                    <a href="{{ route('equipments.edit', $equipment) }}">Edit</a>
                    <form action="{{ route('equipments.destroy', $equipment) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-base-layout>
