<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tournament</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Tournament</h1>
        <form action="{{ route('tournaments.update', $tournament) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $tournament->name }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $tournament->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Start Date</label>
                <input type="date" name="start_date" class="form-control" value="{{ $tournament->start_date }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">End Date</label>
                <input type="date" name="end_date" class="form-control" value="{{ $tournament->end_date }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Min Skill Level</label>
                <input type="number" name="min_skill_level" class="form-control" value="{{ $tournament->min_skill_level }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Max Skill Level</label>
                <input type="number" name="max_skill_level" class="form-control" value="{{ $tournament->max_skill_level }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Format</label>
                <input type="text" name="format" class="form-control" value="{{ $tournament->format }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Entry Fee</label>
                <input type="number" step="0.01" name="entry_fee" class="form-control" value="{{ $tournament->entry_fee }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="pending" {{ $tournament->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="upcoming" {{ $tournament->status == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                    <option value="ongoing" {{ $tournament->status == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                    <option value="completed" {{ $tournament->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="canceled" {{ $tournament->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('tournaments.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
