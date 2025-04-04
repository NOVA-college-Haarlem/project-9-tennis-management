<x-base-layout>
    <h1>Match Details</h1>
    <p>Competition: {{ $competitionMatch->competition->name }}</p>
    <p>Team 1: {{ $competitionMatch->team1->name }}</p>
    <p>Team 2: {{ $competitionMatch->team2->name }}</p>
    <p>Scheduled Time: {{ $competitionMatch->scheduled_time }}</p>
    <p>Court: {{ $competitionMatch->court->name }}</p>
    <p>Status: {{ $competitionMatch->status }}</p>
    <a href="{{ route('competition_matches.index') }}">Back</a>
</x-base-layout>
