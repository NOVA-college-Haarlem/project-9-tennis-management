<x-base-layout>
    <h1>Edit Equipment Rental</h1>

    <form action="{{ route('equipment_rentals.update', $equipmentRental) }}" method="POST">
        @csrf
        @method('PUT')

        <table>
            <tr>
                <th>Equipment</th>
                <td>
                    <select name="equipment_id">
                        @foreach ($equipments as $equipment)
                            <option value="{{ $equipment->id }}"
                                {{ $equipmentRental->equipment_id == $equipment->id ? 'selected' : '' }}>
                                {{ $equipment->name }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>User</th>
                <td>
                    <select name="user_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}"
                                {{ $equipmentRental->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->firstname }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>Start Time</th>
                <td><input type="datetime-local" name="start_time" value="{{ $equipmentRental->start_time }}" required>
                </td>
            </tr>
            <tr>
                <th>End Time</th>
                <td><input type="datetime-local" name="end_time" value="{{ $equipmentRental->end_time }}" required></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <select name="status">
                        <option value="reserved" {{ $equipmentRental->status == 'reserved' ? 'selected' : '' }}>Reserved
                        </option>
                        <option value="completed" {{ $equipmentRental->status == 'completed' ? 'selected' : '' }}>
                            Completed</option>
                        <option value="canceled" {{ $equipmentRental->status == 'canceled' ? 'selected' : '' }}>
                            Canceled</option>
                    </select>
                </td>
            </tr>
        </table>

        <button type="submit">Update Rental</button>
    </form>

    <a href="{{ route('equipment_rentals.index') }}">Cancel</a>
</x-base-layout>
