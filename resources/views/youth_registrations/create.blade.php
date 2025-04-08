<h1>Register for Youth Program</h1>
<form action="{{ route('youth_registrations.store') }}" method="POST">
    @csrf
    <label>Program:</label>
    <select name="program_id" required>
        @foreach($youthPrograms as $program)
            <option value="{{ $program->id }}">{{ $program->name }}</option>
        @endforeach
    </select>
    <label>Child First Name:</label>
    <input type="text" name="child_firstname" required>
    <label>Child Last Name:</label>
    <input type="text" name="child_lastname" required>
    <label>Child Age:</label>
    <input type="number" name="child_age" required>
    <label>Emergency Contact Phone:</label>
    <input type="text" name="emergency_contact_phone" required>
    <button type="submit" class="btn btn-success">Register</button>
</form>