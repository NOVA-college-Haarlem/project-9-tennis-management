<x-base-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Tournament Registration</title>
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}
    </head>

    <body>
        <div class="container mt-4">
            <h2 class="mb-4">Edit Tournament Registration</h2>
            <a href="{{ route('tournament_registrations.index') }}" class="btn btn-secondary mb-3">Back</a>

            <form action="{{ route('tournament_registrations.update', $registration->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="user_id" class="form-label">User</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                        <option value="">Select User</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}"
                                {{ $registration->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->firstname }} {{ $user->lastname }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tournament_id" class="form-label">Tournament</label>
                    <select name="tournament_id" id="tournament_id" class="form-control" required>
                        <option value="">Select Tournament</option>
                        @foreach ($tournaments as $tournament)
                            <option value="{{ $tournament->id }}"
                                {{ $registration->tournament_id == $tournament->id ? 'selected' : '' }}>
                                {{ $tournament->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="registration_date" class="form-label">Registration Date</label>
                    <input type="date" name="registration_date" id="registration_date" class="form-control"
                        value="{{ $registration->registration_date }}" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="registered" {{ $registration->status == 'registered' ? 'selected' : '' }}>
                            Registered</option>
                        <option value="confirmed" {{ $registration->status == 'confirmed' ? 'selected' : '' }}>
                            Confirmed</option>
                        <option value="canceled" {{ $registration->status == 'canceled' ? 'selected' : '' }}>Canceled
                        </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>

    </html>
</x-base-layout>
