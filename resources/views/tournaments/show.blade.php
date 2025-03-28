<div class="container">
    <h1>{{ $tournament->name }}</h1>
    <p>Start Date: {{ $tournament->start_date }}</p>
    <a href="{{ route('tournaments.edit', $tournament) }}" class="btn btn-warning">Edit</a>
</div>