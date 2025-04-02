<h1>Rent Equipment</h1>

<form action="{{ route('equipment_rentals.store') }}" method="POST">
    @csrf
    <table>
        <tr>
            <th>Equipment</th>
            <td>
                <select name="equipment_id" required>
                    @foreach($equipments as $equipment)
                        <option value="{{ $equipment->id }}">{{ $equipment->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <th>User</th>
            <td>
                <select name="user_id" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <th>Start Time</th>
            <td><input type="datetime-local" name="start_time" required></td>
        </tr>
        <tr>
            <th>End Time</th>
            <td><input type="datetime-local" name="end_time" required></td>
        </tr>

        <input type="hidden" name="status" value="reserved">
    </table>

    <button type="submit">Create Rental</button>
</form>

<a href="{{ route('equipment_rentals.index') }}">Cancel</a>
