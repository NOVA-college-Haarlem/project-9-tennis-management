<h1>Youth Registrations</h1>
<ul>
    @foreach($registrations as $registration)
        <li>
            {{ $registration->child_firstname }} {{ $registration->child_lastname }} - 
            Program: {{ $registration->program->name }}
            <a href="{{ route('youth_registrations.show', $registration->id) }}" class="btn btn-info">View</a>
            <a href="{{ route('youth_registrations.edit', $registration->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('youth_registrations.destroy', $registration->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this registration?')">Delete</button>
            </form>
        </li>
    @endforeach
</ul>