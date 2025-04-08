<h1>Create Youth Program</h1>
<form action="{{ route('youth_programs.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Description:</label>
    <textarea name="description" required></textarea>
    <label>Min Age:</label>
    <input type="number" name="min_age" required>
    <label>Max Age:</label>
    <input type="number" name="max_age" required>
    <label>Start Date:</label>
    <input type="date" name="start_date" required>
    <label>End Date:</label>
    <input type="date" name="end_date" required>
    <label>Schedule:</label>
    <input type="text" name="schedule" required>
    <label>Fee:</label>
    <input type="number" step="0.01" name="fee" required>
    <label>Capacity:</label>
    <input type="number" name="capacity" required>
    <button type="submit" class="btn btn-success">Create</button>
</form>