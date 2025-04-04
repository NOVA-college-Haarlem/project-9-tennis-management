<h1>Edit Equipment</h1>

<form action="{{ route('equipments.update', $equipment) }}" method="POST">
    @csrf
    @method('PUT')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" value="{{ $equipment->name }}" required></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><input type="text" name="type" value="{{ $equipment->type }}" required></td>
        </tr>
        <tr>
            <th>Condition</th>
            <td>
                <select name="condition">
                    <option value="new" {{ $equipment->condition == 'new' ? 'selected' : '' }}>New</option>
                    <option value="good" {{ $equipment->condition == 'good' ? 'selected' : '' }}>Good</option>
                    <option value="damaged" {{ $equipment->condition == 'damaged' ? 'selected' : '' }}>Damaged</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Available</th>
            <td>
                <select name="available">
                    <option value="1" {{ $equipment->available ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$equipment->available ? 'selected' : '' }}>No</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Rental Fee ($)</th>
            <td><input type="number" step="0.01" name="rental_fee" value="{{ $equipment->rental_fee }}" required>
            </td>
        </tr>
    </table>

    <button type="submit">Update Equipment</button>
</form>

<a href="{{ route('equipments.index') }}">Cancel</a>
