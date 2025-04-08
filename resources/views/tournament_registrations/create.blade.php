<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">🏆 Register for a Tournament</h2>
                <a href="{{ route('tournament_registrations.index') }}"
                   class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <!-- Form Section -->
            <form action="{{ route('tournament_registrations.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- User Selection -->
                    <div>
                        <label for="user_id" class="block text-sm font-medium text-gray-700 mb-1">User</label>
                        <select name="user_id" id="user_id"
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                                required>
                            <option value="" disabled selected>Select User</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tournament Selection -->
                    <div>
                        <label for="tournament_id" class="block text-sm font-medium text-gray-700 mb-1">Tournament</label>
                        <select name="tournament_id" id="tournament_id"
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                                required>
                            <option value="" disabled selected>Select Tournament</option>
                            @foreach ($tournaments as $tournament)
                                <option value="{{ $tournament->id }}">{{ $tournament->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Registration Date -->
                    <div>
                        <label for="registration_date" class="block text-sm font-medium text-gray-700 mb-1">Registration Date</label>
                        <input type="date" name="registration_date" id="registration_date"
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                               required>
                    </div>

                    <!-- Hidden Status -->
                    <input type="hidden" name="status" value="registered">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-paper-plane"></i> Submit Registration
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
