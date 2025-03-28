<div class="container">
    <h1>Edit Tournament</h1>
    <form action="{{ route('tournaments.update', $tournament) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ $tournament->name }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>