<h1>Competition Match Details</h1>
<p><strong>Competition:</strong> {{ $competitionMatch->competition->name }}</p>
<p><strong>Team 1:</strong> {{ $competitionMatch->team1->name }}</p>
<p><strong>Team 2:</strong> {{ $competitionMatch->team2->name }}</p>
<p><strong>Scheduled Time:</strong> {{ $competitionMatch->scheduled_time }}</p>
<a href="{{ route('competition_matches.edit', $competitionMatch) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('competition_matches.destroy', $competitionMatch) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>