<h1>Youth Programs</h1>
<a href="{{ route('youth_programs.create') }}" class="btn btn-primary">Create New Program</a>
<ul>
    @foreach($programs as $program)
        <li>
            <a href="{{ route('youth_programs.show', $program->id) }}">{{ $program->name }}</a>
        </li>
    @endforeach
</ul>