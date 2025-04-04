<x-base-layout>
    <div class="container">
        <h2>Tournament Details</h2>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td>{{ $tournament->name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $tournament->description }}</td>
            </tr>
            <tr>
                <th>Start Date</th>
                <td>{{ $tournament->start_date }}</td>
            </tr>
            <tr>
                <th>End Date</th>
                <td>{{ $tournament->end_date }}</td>
            </tr>
            <tr>
                <th>Min Skill Level</th>
                <td>{{ $tournament->min_skill_level }}</td>
            </tr>
            <tr>
                <th>Max Skill Level</th>
                <td>{{ $tournament->max_skill_level }}</td>
            </tr>
            <tr>
                <th>Format</th>
                <td>{{ $tournament->format }}</td>
            </tr>
            <tr>
                <th>Entry Fee</th>
                <td>${{ $tournament->entry_fee }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $tournament->status }}</td>
            </tr>
        </table>
        <a href="{{ route('tournaments.edit', $tournament) }}" class="btn btn-warning">Edit Tournament</a>
        <a href="{{ route('tournaments.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</x-base-layout>
