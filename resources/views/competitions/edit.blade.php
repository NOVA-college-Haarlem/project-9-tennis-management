<x-base-layout>
<<<<<<< HEAD
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Competition: {{ $competition->name }}</h2>
                <a href="{{ route('competitions.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Competitions
                </a>
            </div>

            <!-- Error Display -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-600 p-4 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>⚠️ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('competitions.update', $competition->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" value="{{ old('name', $competition->name) }}"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea name="description" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">{{ old('description', $competition->description) }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                            <input type="date" name="start_date" value="{{ old('start_date', $competition->start_date) }}"
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                            <input type="date" name="end_date" value="{{ old('end_date', $competition->end_date) }}"
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Min Skill Level</label>
                            <input type="number" name="min_skill_level" min="1" value="{{ old('min_skill_level', $competition->min_skill_level) }}"
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Max Skill Level</label>
                            <input type="number" name="max_skill_level" min="1" value="{{ old('max_skill_level', $competition->max_skill_level) }}"
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                        </div>
                    </div>

                    {{-- <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Format</label>
                        <select name="format"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                            <option value="round-robin" {{ old('format', $competition->format) == 'round-robin' ? 'selected' : '' }}>Round Robin</option>
                            <option value="knockout" {{ old('format', $competition->format) == 'knockout' ? 'selected' : '' }}>Knockout</option>
                        </select>
                    </div> --}}

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="upcoming" {{ old('status', $competition->status) == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                            <option value="ongoing" {{ old('status', $competition->status) == 'completed' ? 'selected' : '' }}>Ongoing</option>
                            <option value="completed" {{ old('status', $competition->status) == 'canceled' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Update Competition
                </button>
            </form>
        </div>
    </main>
=======
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
>>>>>>> 07a1b80ba1e5bc6062338a3528c2866f5d67200e
</x-base-layout>
