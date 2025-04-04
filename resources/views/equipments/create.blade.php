<x-base-layout>
    <h1>Add New Equipment</h1>

    <form action="{{ route('equipments.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>Type</th>
                <td><input type="text" name="type" required></td>
            </tr>
            <tr>
                <th>Condition</th>
                <td>
                    <select name="condition">
                        <option value="new">New</option>
                        <option value="good">Good</option>
                        <option value="damaged">Damaged</option>
                    </select>
                </td>
            </tr>

            <input type="hidden" name="available" value="1">

            <tr>
                <th>Rental Fee ($)</th>
                <td><input type="number" step="0.01" name="rental_fee" required></td>
            </tr>
        </table>

        <button type="submit">Add Equipment</button>
    </form>

    <a href="{{ route('equipments.index') }}">Cancel</a>
</x-base-layout>
