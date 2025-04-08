<x-base-layout>
    <div class="container">
        <h2>Create Court</h2>
        <form action="{{ route('courts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Court Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="court_type">Court Type</label>
                <input type="text" name="court_type" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="court_condition">Court Condition</label>
                <select name="court_condition" id="court_condition" class="form-control">
                    <option value="Excellent">Excellent</option>
                    <option value="Decent">Decent</option>
                    <option value="Barely Playable">Barely Playable</option>
                    <option value="Unplayable">Unplayable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="surface">Surface</label>
                <input type="text" name="surface" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="indoor">Indoor</label>
                <select name="indoor" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="active">Active</label>
                <select name="active" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create Court</button>
        </form>
    </div>
</x-base-layout>
