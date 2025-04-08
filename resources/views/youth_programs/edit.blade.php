<h1>Edit Youth Program</h1>
<form action="{{ route('youth_programs.update', $youthProgram->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ $youthProgram->name }}" required>
    <label>Description:</label>
    <textarea name="description" required>{{ $youthProgram->description }}</textarea>
    <label>Min Age:</label>
    <input type="number" name="min_age" value="{{ $youthProgram->min_age }}" required>
    <label>Max Age:</label>
    <input type="number" name="max_age" value="{{ $youthProgram->max_age }}" required>
    <label>Start Date:</label>
    <input type="date" name="start_date" value="{{ $youthProgram->start_date }}" required>
    <label>End Date:</label>
    <input type="date" name="end_date" value="{{ $youthProgram->end_date }}" required>
    <label>Schedule:</label>
    <input type="text" name="schedule" value="{{ $youthProgram->schedule }}" required>
    <label>Fee:</label>
    <input type="number" step="0.01" name="fee" value="{{ $youthProgram->fee }}" required>
    <label>Capacity:</label>
    <input type="number" name="capacity" value="{{ $youthProgram->capacity }}" required>
    <button type="submit" class="btn btn-success">Update</button>
</form>