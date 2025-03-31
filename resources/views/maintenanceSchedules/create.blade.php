@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <h2>Create Maintenance Schedule</h2>
    <form action="{{ route('maintenanceschedules.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="court_id">Court</label>
            <select name="court_id" class="form-control" required>
                @foreach($courts as $court)
                    <option value="{{ $court->id }}">{{ $court->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="start_time">Start Date</label>
            <input type="date" id="start_time" name="start_time" value="{{ old('start_time') }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_time">End Date</label>
            <input type="date" id="end_time" name="end_time" value="{{ old('end_time') }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="scheduled" {{ old('status') == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Create Maintenance Schedule</button>
    </form>
</div>
