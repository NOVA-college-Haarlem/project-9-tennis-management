<h1>{{ $youthProgram->name }}</h1>
<p>{{ $youthProgram->description }}</p>
<p>Age Range: {{ $youthProgram->min_age }} - {{ $youthProgram->max_age }}</p>
<p>Schedule: {{ $youthProgram->schedule }}</p>
<p>Fee: ${{ $youthProgram->fee }}</p>
<p>Capacity: {{ $youthProgram->capacity }}</p>
<a href="{{ route('youth_programs.edit', $youthProgram->id) }}" class="btn btn-primary">Edit</a>