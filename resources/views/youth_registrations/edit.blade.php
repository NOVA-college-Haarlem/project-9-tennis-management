<h1>Edit Youth Registration</h1>
<form action="{{ route('youth_registrations.update', $youthRegistration->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Program:</label>
    <select name="program_id" required>
        @foreach($youthPrograms as $program)
            <option value="{{ $program->id }}" {{ $program->id == $youthRegistration->program_id ? 'selected' : '' }}>
                {{ $program->name }}
            </option>
        @endforeach
    </select>
    <label>Child First Name:</label>
    <input type="text" name="child_firstname" value="{{ $youthRegistration->child_firstname }}" required>
    <label>Child Last Name:</label>
    <input type="text" name="child_lastname" value="{{ $youthRegistration->child_lastname }}" required>
    <label>Child Age:</label>
    <input type="number" name="child_age" value="{{ $youthRegistration->child_age }}" required>
    <label>Emergency Contact Phone:</label>
    <input type="text" name="emergency_contact_phone" value="{{ $youthRegistration->emergency_contact_phone }}" required>
    <button type="submit" class="btn btn-success">Update</button>
</form>