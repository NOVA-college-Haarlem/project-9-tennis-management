<h1>{{ $competitionTeam->name }}</h1>
    <p>Competition: {{ $competitionTeam->competition->name }}</p>
    <p>Captain: {{ $competitionTeam->captain->firstname }} {{ $competitionTeam->captain->lastname }}</p>
    <a href="{{ route('competition_teams.index') }}">Back</a>