<x-base-layout>
    <h1>Equipment Details</h1>

    <table>
        <tr>
            <th>Name</th>
            <td>{{ $equipment->name }}</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>{{ $equipment->type }}</td>
        </tr>
        <tr>
            <th>Condition</th>
            <td>{{ ucfirst($equipment->condition) }}</td>
        </tr>
        <tr>
            <th>Available</th>
            <td>{{ $equipment->available ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <th>Rental Fee</th>
            <td>${{ number_format($equipment->rental_fee, 2) }}</td>
        </tr>
    </table>

    <a href="{{ route('equipments.index') }}">Back to Equipment List</a>
    <a href="{{ route('equipments.edit', $equipment) }}">Edit</a>

    <form action="{{ route('equipments.destroy', $equipment) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</x-base-layout>
