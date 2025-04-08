@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<x-base-layout>

    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">🏆 Create New Match</h2>
                <a href="{{ route('competition_matches.index') }}"
                    class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Matches
                </a>
            </div>

            <!-- Form Section -->
            <form action="{{ route('competition_matches.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Competition Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Competition</label>
                        <select name="competition_id"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select Competition</option>
                            @foreach ($competitions as $competition)
                                <option value="{{ $competition->id }}" class="p-2">{{ $competition->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Team 1 Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Team 1</label>
                        <select name="team1_id"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select Team 1</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}" class="p-2">{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Team 2 Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Team 2</label>
                        <select name="team2_id"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select Team 2</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}" class="p-2">{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Court Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Court</label>
                        <select name="court_id"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select Court</option>
                            @foreach ($courts as $court)
                                <option value="{{ $court->id }}" class="p-2">{{ $court->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Date/Time Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Scheduled Time</label>
                            <input type="datetime-local" name="scheduled_time"
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                                required>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="status" value="scheduled">

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-calendar-plus"></i> Create Match
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
