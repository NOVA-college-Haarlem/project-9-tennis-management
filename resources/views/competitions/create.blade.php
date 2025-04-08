<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">➕ Create Competition</h2>
                <a href="{{ route('competitions.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Competitions
                </a>
            </div>

            <!-- Form Section -->
            <form action="{{ route('competitions.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    @foreach([
                        'name' => 'Name',
                        'description' => 'Description',
                        'start_date' => 'Start Date',
                        'end_date' => 'End Date',
                        'min_skill_level' => 'Min Skill Level',
                        'max_skill_level' => 'Max Skill Level'
                    ] as $field => $label)
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
                            @if($field == 'description')
                                <textarea name="{{ $field }}" required
                                          class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                                    {{ old($field) }}
                                </textarea>
                            @else
                                <input type="{{ in_array($field, ['start_date', 'end_date']) ? 'date' : 'text' }}"
                                       name="{{ $field }}" value="{{ old($field) }}" required
                                       class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                            @endif
                            @error($field)
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    @endforeach

                    <!-- Format -->
                    {{-- <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Format</label>
                        <select name="format" required
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                            <option value="round-robin" {{ old('format') == 'round-robin' ? 'selected' : '' }}>Round Robin</option>
                            <option value="knockout" {{ old('format') == 'knockout' ? 'selected' : '' }}>Knockout</option>
                        </select>
                        @error('format')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div> --}}

                    <!-- Status -->
                    <input type="hidden" name="status" value="upcoming">

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-plus-circle"></i> Create Competition
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
