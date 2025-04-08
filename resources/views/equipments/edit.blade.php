<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">

            <!-- Header -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Equipment: {{ $equipment->name }}</h2>
                <a href="{{ route('equipments.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Equipment List
                </a>
            </div>

            <!-- Error Display -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-600 p-4 rounded-md mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>⚠️ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('equipments.update', $equipment) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" value="{{ old('name', $equipment->name) }}"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                        <input type="text" name="type" value="{{ old('type', $equipment->type) }}"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Condition</label>
                        <select name="condition"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500">
                            <option value="new" {{ old('condition', $equipment->condition) == 'new' ? 'selected' : '' }}>New</option>
                            <option value="good" {{ old('condition', $equipment->condition) == 'good' ? 'selected' : '' }}>Good</option>
                            <option value="damaged" {{ old('condition', $equipment->condition) == 'damaged' ? 'selected' : '' }}>Damaged</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Available</label>
                        <select name="available"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500">
                            <option value="1" {{ old('available', $equipment->available) ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ !old('available', $equipment->available) ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Rental Fee ($)</label>
                        <input type="number" step="0.01" name="rental_fee" value="{{ old('rental_fee', $equipment->rental_fee) }}"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Update Equipment
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
