<x-base-layout> 
<div class="container">
    <h2>Maintenance Schedules</h2>
    <a href="{{ route('maintenanceschedules.create') }}" class="btn btn-primary mb-3">Create Maintenance Schedule</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Court</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($maintenanceSchedules as $schedule)
                <tr>
                    <td>{{ $schedule->id }}</td>
                    <td>{{ $schedule->court->name }}</td>
                    <td>{{ $schedule->start_time }}</td>
                    <td>{{ $schedule->end_time }}</td>
                    <td>{{ ucfirst($schedule->status) }}</td>
                    <td>
                        <a href="{{ route('maintenanceschedules.show', $schedule->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('maintenanceschedules.edit', $schedule->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('maintenanceschedules.destroy', $schedule->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-base-layout> 