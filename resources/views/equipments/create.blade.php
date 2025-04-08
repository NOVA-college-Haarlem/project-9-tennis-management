<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">➕ Add New Equipment</h2>
                <a href="{{ route('equipments.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Cancel
                </a>
            </div>

            <!-- Form Section -->
            <form action="{{ route('equipments.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                        <input type="text" name="type" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Condition -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Condition</label>
                        <select name="condition"
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                            <option value="new">New</option>
                            <option value="good">Good</option>
                            <option value="damaged">Damaged</option>
                        </select>
                    </div>

                    <!-- Rental Fee -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Rental Fee ($)</label>
                        <input type="number" step="0.01" name="rental_fee" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Hidden Availability -->
                    <input type="hidden" name="available" value="1">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-plus-circle"></i> Add Equipment
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
