<x-base-layout>
    <div class="container">
        <h2>{{ $competition->name }}</h2>
        <p><strong>Description:</strong> {{ $competition->description }}</p>
        <p><strong>Start Date:</strong> {{ $competition->start_date }}</p>
        <p><strong>End Date:</strong> {{ $competition->end_date }}</p>
        <p><strong>Min Skill Level:</strong> {{ $competition->min_skill_level }}</p>
        <p><strong>Max Skill Level:</strong> {{ $competition->max_skill_level }}</p>
        <p><strong>Format:</strong> {{ ucfirst($competition->format) }}</p>
        <p><strong>Status:</strong> {{ ucfirst($competition->status) }}</p>

        <a href="{{ route('competitions.index') }}" class="btn btn-primary">Back to List</a>
        <a href="{{ route('competitions.edit', $competition->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('competitions.destroy', $competition->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
                onclick="return confirm('Are you sure you want to delete this competition?')">Delete</button>
        </form>
    </div>
</x-base-layout>
