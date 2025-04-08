<h1>Youth Programs</h1>
<a href="{{ route('youth_programs.create') }}" class="btn btn-primary">Create New Program</a>
<ul>
    @foreach($programs as $program)
        <li>
            <a href="{{ route('youth_programs.show', $program->id) }}">{{ $program->name }}</a>
            <form action="{{ route('youth_programs.destroy', $program->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this program?')">Delete</button>
            </form>
        </li>
    @endforeach
</ul>