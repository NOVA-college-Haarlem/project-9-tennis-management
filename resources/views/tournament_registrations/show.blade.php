<div class="container">
    <h2>Tournament Registration Details</h2>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $registration->id }}</td>
        </tr>
        <tr>
            <th>User:</th>
            <td>{{ $registration->user->name }} (ID: {{ $registration->user_id }})</td>
        </tr>
        <tr>
            <th>Tournament:</th>
            <td>{{ $registration->tournament->name }}</td>
        </tr>
        <tr>
            <th>Registration Date:</th>
            <td>{{ $registration->registration_date }}</td>
        </tr>
        <tr>
            <th>Status:</th>
            <td>{{ ucfirst($registration->status) }}</td>
        </tr>
    </table>

    <a href="{{ route('tournament_registrations.edit', $registration->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('tournament_registrations.destroy', $registration->id) }}" method="POST" style="display:inline;">
        @csrf @method('DELETE')
        <button type="submit" class="btn btn-danger"
            onclick="return confirm('Are you sure?')">Delete</button>
    </form>
    <a href="{{ route('tournament_registrations.index') }}" class="btn btn-secondary">Back to Registrations</a>
</div>