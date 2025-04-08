<h1>{{ $youthProgram->name }}</h1>
<p>{{ $youthProgram->description }}</p>
<p>Age Range: {{ $youthProgram->min_age }} - {{ $youthProgram->max_age }}</p>
<p>Schedule: {{ $youthProgram->schedule }}</p>
<p>Fee: ${{ $youthProgram->fee }}</p>
<p>Capacity: {{ $youthProgram->capacity }}</p>
<a href="{{ route('youth_programs.edit', $youthProgram->id) }}" class="btn btn-primary">Edit</a>
<form action="{{ route('youth_programs.destroy', $youthProgram->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this program?')">Delete</button>
</form>