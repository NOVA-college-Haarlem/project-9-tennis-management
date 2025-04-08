<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">

            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">🛠️ Create Maintenance Schedule</h2>
                <a href="{{ route('maintenanceschedules.index') }}"
                    class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 border border-red-300 p-4 rounded-lg">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Section -->
            <form action="{{ route('maintenanceschedules.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">

                    <!-- Court Selection -->
                    <div>
                        <label for="court_id" class="block text-sm font-medium text-gray-700 mb-1">Court</label>
                        <select name="court_id" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select Court</option>
                            @foreach ($courts as $court)
                                <option value="{{ $court->id }}">{{ $court->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Date Inputs -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="start_time" class="block text-sm font-medium text-gray-700 mb-1">Start
                                Date</label>
                            <input type="date" id="start_time" name="start_time" value="{{ old('start_time') }}"
                                required
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                        </div>

                        <div>
                            <label for="end_time" class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                            <input type="date" id="end_time" name="end_time" value="{{ old('end_time') }}" required
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                        </div>
                    </div>

                    <!-- Status -->

                    <input type="hidden" name="status" value="scheduled">


                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                        <i class="fas fa-tools"></i> Create Schedule
                    </button>
            </form>
        </div>
    </main>
</x-base-layout>
