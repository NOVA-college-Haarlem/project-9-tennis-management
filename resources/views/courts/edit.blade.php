<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Court: {{ $court->name }}</h2>
                <a href="{{ route('courts.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Courts
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

            <!-- Form Section -->
            <form action="{{ route('courts.update', $court->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Court Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Court Name</label>
                        <input type="text" name="name" value="{{ old('name', $court->name) }}"
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                    </div>

                    <!-- Court Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Court Type</label>
                        <input type="text" name="court_type" value="{{ old('court_type', $court->court_type) }}"
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                    </div>

                    <!-- Court Condition -->
                    <div class="form-group">
                        <label for="court_condition">Court Condition</label>
                        <select name="court_condition" id="court_condition" class="form-control">
                            <option value="Excellent" {{ $court->court_condition == 'Excellent' ? 'selected' : '' }}>Excellent</option>
                            <option value="Decent" {{ $court->court_condition == 'Decent' ? 'selected' : '' }}>Decent</option>
                            <option value="Barely Playable" {{ $court->court_condition == 'Barely Playable' ? 'selected' : '' }}>Barely Playable</option>
                            <option value="Unplayable" {{ $court->court_condition == 'Unplayable' ? 'selected' : '' }}>Unplayable</option>
                        </select>
                    </div>

                    <!-- Surface -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Surface</label>
                        <input type="text" name="surface" value="{{ old('surface', $court->surface) }}"
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" required>
                    </div>

                    <!-- Indoor Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Indoor</label>
                        <select name="indoor" required
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="1" {{ old('indoor', $court->indoor) == '1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('indoor', $court->indoor) == '0' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <!-- Active Status -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Active</label>
                        <select name="active" required
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="1" {{ old('active', $court->active) == '1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('active', $court->active) == '0' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Update Court
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
