<x-base-layout>
    <div class="container">
        <h2>Maintenance Schedule Details</h2>
        <p><strong>Court:</strong> {{ $maintenanceSchedule->court->name }}</p>
        <p><strong>Start Time:</strong> {{ $maintenanceSchedule->start_time }}</p>
        <p><strong>End Time:</strong> {{ $maintenanceSchedule->end_time }}</p>
        <p><strong>Status:</strong> {{ ucfirst($maintenanceSchedule->status) }}</p>
        <a href="{{ route('maintenanceschedules.index') }}" class="btn btn-primary">Back to List</a>
    </div>
</x-base-layout>
