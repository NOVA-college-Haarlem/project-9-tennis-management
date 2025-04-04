<x-base-layout>
    <div class="container">
        <h2>Edit Competition: {{ $competition->name }}</h2>
        <form action="{{ route('competitions.update', $competition->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $competition->name) }}"
                    required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required>{{ old('description', $competition->description) }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" class="form-control"
                    value="{{ old('start_date', $competition->start_date) }}" required>
                @error('start_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="end_date">End Date</label>
                <input type="date" name="end_date" class="form-control"
                    value="{{ old('end_date', $competition->end_date) }}" required>
                @error('end_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="min_skill_level">Min Skill Level</label>
                <input type="number" name="min_skill_level" class="form-control"
                    value="{{ old('min_skill_level', $competition->min_skill_level) }}" min="1" required>
                @error('min_skill_level')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="max_skill_level">Max Skill Level</label>
                <input type="number" name="max_skill_level" class="form-control"
                    value="{{ old('max_skill_level', $competition->max_skill_level) }}" min="1" required>
                @error('max_skill_level')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="format">Format</label>
                <select name="format" class="form-control" required>
                    <option value="round-robin"
                        {{ old('format', $competition->format) == 'round-robin' ? 'selected' : '' }}>Round Robin
                    </option>
                    <option value="knockout" {{ old('format', $competition->format) == 'knockout' ? 'selected' : '' }}>
                        Knockout</option>
                </select>
                @error('format')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="upcoming" {{ old('status', $competition->status) == 'upcoming' ? 'selected' : '' }}>
                        Upcoming</option>
                    <option value="ongoing" {{ old('status', $competition->status) == 'ongoing' ? 'selected' : '' }}>
                        Ongoing</option>
                    <option value="completed"
                        {{ old('status', $competition->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
</x-base-layout>
