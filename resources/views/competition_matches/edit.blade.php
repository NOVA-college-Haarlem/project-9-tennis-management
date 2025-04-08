<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Competition Match</h2>
                <a href="{{ route('competition_matches.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Matches
                </a>
            </div>

            <!-- Error Section -->
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
            <form action="{{ route('competition_matches.update', $competitionMatch) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Competition Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Competition</label>
                        <select name="competition_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            @foreach ($competitions as $competition)
                                <option value="{{ $competition->id }}" {{ $competitionMatch->competition_id == $competition->id ? 'selected' : '' }}>{{ $competition->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Team 1 Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Team 1</label>
                        <select name="team1_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}" {{ $competitionMatch->team1_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Team 2 Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Team 2</label>
                        <select name="team2_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}" {{ $competitionMatch->team2_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Court Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Court</label>
                        <select name="court_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            @foreach ($courts as $court)
                                <option value="{{ $court->id }}" {{ $competitionMatch->court_id == $court->id ? 'selected' : '' }}>{{ $court->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Status Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="scheduled" {{ $competitionMatch->status == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                            <option value="completed" {{ $competitionMatch->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="canceled" {{ $competitionMatch->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                        </select>
                    </div>

                    <!-- Scheduled Time Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Scheduled Time</label>
                        <input type="datetime-local" name="scheduled_time" 
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" 
                               value="{{ $competitionMatch->scheduled_time }}" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-calendar-check"></i> Update Match
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
