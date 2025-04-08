<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Tournament: {{ $tournament->name }}</h2>
                <a href="{{ route('tournaments.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Tournaments
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
            <form action="{{ route('tournaments.update', $tournament->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" value="{{ old('name', $tournament->name) }}"
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition duration-200" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea name="description" required
                                  class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition duration-200">{{ old('description', $tournament->description) }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                            <input type="date" name="start_date" value="{{ old('start_date', $tournament->start_date) }}"
                                   class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition duration-200" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                            <input type="date" name="end_date" value="{{ old('end_date', $tournament->end_date) }}"
                                   class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition duration-200" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Min Skill Level</label>
                            <input type="number" name="min_skill_level" min="1" value="{{ old('min_skill_level', $tournament->min_skill_level) }}"
                                   class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition duration-200" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Max Skill Level</label>
                            <input type="number" name="max_skill_level" min="1" value="{{ old('max_skill_level', $tournament->max_skill_level) }}"
                                   class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition duration-200" required>
                        </div>
                    </div>
{{-- 
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Format</label>
                        <input type="text" name="format" value="{{ old('format', $tournament->format) }}"
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition duration-200" required>
                    </div> --}}

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Entry Fee</label>
                        <input type="number" step="0.01" name="entry_fee" value="{{ old('entry_fee', $tournament->entry_fee) }}"
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition duration-200" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status"
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition duration-200">
                            <option value="upcoming" {{ old('status', $tournament->status) == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                            <option value="completed" {{ old('status', $tournament->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="canceled" {{ old('status', $tournament->status) == 'canceled' ? 'selected' : '' }}>Canceled</option>
                        </select>
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Update Tournament
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
