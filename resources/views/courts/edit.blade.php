<div class="container">
    <h2>Edit Court</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('courts.update', $court->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Court Name</label>
            <input type="text" name="name" class="form-control" value="{{ $court->name }}" required>
        </div>
        <div class="form-group">
            <label for="court_type">Court Type</label>
            <input type="text" name="court_type" class="form-control" value="{{ $court->court_type }}" required>
        </div>
        <div class="form-group">
            <label for="surface">Surface</label>
            <input type="text" name="surface" class="form-control" value="{{ $court->surface }}" required>
        </div>
        <div class="form-group">
            <label for="indoor">Indoor</label>
            <select name="indoor" class="form-control">
                <option value="1" {{ $court->indoor ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$court->indoor ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="active">Active</label>
            <select name="active" class="form-control">
                <option value="1" {{ $court->active ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$court->active ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Court</button>
    </form>
</div>
