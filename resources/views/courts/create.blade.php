<x-base-layout>
<<<<<<< HEAD
    @if ($errors->any())
    <div class="bg-red-100 text-red-600 p-4 rounded-md mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>⚠️ {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">➕ Create Court</h2>
                <a href="{{ route('courts.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Courts
                </a>
            </div>

            <!-- Form Section -->
            <form action="{{ route('courts.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Court Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Court Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                        @error('name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Court Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Court Type</label>
                        <input type="text" name="court_type" value="{{ old('court_type') }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                        @error('court_type')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Surface -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Surface</label>
                        <input type="text" name="surface" value="{{ old('surface') }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                        @error('surface')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Indoor Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Indoor</label>
                        <select name="indoor" required
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                            <option value="1" {{ old('indoor') == '1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('indoor') == '0' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('indoor')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Active Status -->
                    <input type="hidden" name="status" value="active">


                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-plus-circle"></i> Create Court
                </button>
            </form>
        </div>
    </main>
=======
    <div class="container">
        <h2>Create Court</h2>
        <form action="{{ route('courts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Court Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="court_type">Court Type</label>
                <input type="text" name="court_type" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="court_condition">Court Condition</label>
                <select name="court_condition" id="court_condition" class="form-control">
                    <option value="Excellent">Excellent</option>
                    <option value="Decent">Decent</option>
                    <option value="Barely Playable">Barely Playable</option>
                    <option value="Unplayable">Unplayable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="surface">Surface</label>
                <input type="text" name="surface" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="indoor">Indoor</label>
                <select name="indoor" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="active">Active</label>
                <select name="active" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create Court</button>
        </form>
    </div>
>>>>>>> 07a1b80ba1e5bc6062338a3528c2866f5d67200e
</x-base-layout>
