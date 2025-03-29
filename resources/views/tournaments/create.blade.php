<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tournament</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}
</head>
<body>
    <div class="container mt-5">
        <h1>Create Tournament</h1>
        <form action="{{ route('tournaments.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Start Date</label>
                <input type="date" name="start_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">End Date</label>
                <input type="date" name="end_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Min Skill Level</label>
                <input type="number" name="min_skill_level" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Max Skill Level</label>
                <input type="number" name="max_skill_level" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Format</label>
                <input type="text" name="format" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Entry Fee</label>
                <input type="number" step="0.01" name="entry_fee" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="pending">Pending</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="ongoing">Ongoing</option>
                    <option value="completed">Completed</option>
                    <option value="canceled">Canceled</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
            <a href="{{ route('tournaments.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
