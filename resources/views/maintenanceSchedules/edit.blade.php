<x-base-layout>
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
        <h2>Edit Maintenance Schedule</h2>
        <form action="{{ route('maintenanceschedules.update', $maintenanceSchedule->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="court_id">Court</label>
                <select name="court_id" class="form-control" required>
                    @foreach ($courts as $court)
                        <option value="{{ $court->id }}"
                            {{ $maintenanceSchedule->court_id == $court->id ? 'selected' : '' }}>
                            {{ $court->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <label for="start_time">Start Date:</label>
            <input type="date" id="start_time" name="start_time" value="{{ old('start_time') }}" required>

            <label for="end_time">End Date:</label>
            <input type="date" id="end_time" name="end_time" value="{{ old('end_time') }}" required>


            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="scheduled" {{ $maintenanceSchedule->status == 'scheduled' ? 'selected' : '' }}>
                        Scheduled</option>
                    <option value="completed" {{ $maintenanceSchedule->status == 'completed' ? 'selected' : '' }}>
                        Completed</option>
                    <option value="cancelled" {{ $maintenanceSchedule->status == 'cancelled' ? 'selected' : '' }}>
                        Cancelled</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Update Maintenance Schedule</button>
        </form>
    </div>
</x-base-layout>
