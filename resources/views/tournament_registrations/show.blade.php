<x-base-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Tournament Registration</title>
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}
    </head>

    <body>
        <div class="container mt-4">
            <h2 class="mb-4">Tournament Registration Details</h2>
            <a href="{{ route('tournament_registrations.index') }}" class="btn btn-secondary mb-3">Back</a>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registration #{{ $registration->id }}</h5>
                    <p class="card-text"><strong>User:</strong> {{ $registration->user?->firstname ?? 'Unknown' }}
                        {{ $registration->user?->lastname ?? '' }}</p>
                    <p class="card-text"><strong>Tournament:</strong>
                        {{ $registration->tournament?->name ?? 'Unknown' }}</p>
                    <p class="card-text"><strong>Registration Date:</strong> {{ $registration->registration_date }}</p>
                    <p class="card-text"><strong>Status:</strong> <span
                            class="badge bg-primary">{{ ucfirst($registration->status) }}</span></p>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('tournament_registrations.edit', $registration->id) }}"
                    class="btn btn-warning">Edit</a>
                <form action="{{ route('tournament_registrations.destroy', $registration->id) }}" method="POST"
                    class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </body>

    </html>
</x-base-layout>
