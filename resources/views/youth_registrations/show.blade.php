<h1>Registration Details</h1>
<p>Child Name: {{ $youthRegistration->child_firstname }} {{ $youthRegistration->child_lastname }}</p>
<p>Age: {{ $youthRegistration->child_age }}</p>
<p>Program: {{ $youthRegistration->program->name }}</p>
<p>Emergency Contact: {{ $youthRegistration->emergency_contact_phone }}</p>
<p>Status: {{ $youthRegistration->status }}</p>
<a href="{{ route('youth_registrations.edit', $youthRegistration->id) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('youth_registrations.destroy', $youthRegistration->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this registration?')">Delete</button>
</form>