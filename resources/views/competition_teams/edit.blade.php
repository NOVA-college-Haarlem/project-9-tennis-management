<x-base-layout>
<<<<<<< HEAD
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Competition Team</h2>
                <a href="{{ route('competition_teams.index') }}"
                    class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Teams
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
            <form action="{{ route('competition_teams.update', $competitionTeam) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Team Name Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Team Name</label>
                        <select name="name" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            @foreach ($teams as $team)
                                <option value="{{ $team->name }}" {{ $competitionTeam->name == $team->name ? 'selected' : '' }}>{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Competition Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Competition</label>
                        <select name="competition_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            @foreach ($competitions as $competition)
                                <option value="{{ $competition->id }}" {{ $competitionTeam->competition_id == $competition->id ? 'selected' : '' }}>{{ $competition->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Captain Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Captain</label>
                        <select name="captain_id" class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $competitionTeam->captain_id == $user->id ? 'selected' : '' }}>{{ $user->firstname }} {{ $user->lastname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-check-circle"></i> Update Team
                </button>
            </form>
        </div>
    </main>
=======
    <h1>Edit Competition Team</h1>
    <form action="{{ route('competition_teams.update', $competitionTeam) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Team Name:</label>
        <select name="name">
            @foreach ($teams as $team)
                <option value="{{ $team->name }}" {{ $competitionTeam->name == $team->name ? 'selected' : '' }}>
                    {{ $team->name }}</option>
            @endforeach
        </select>
        <label>Competition:</label>
        <select name="competition_id">
            @foreach ($competitions as $competition)
                <option value="{{ $competition->id }}"
                    {{ $competitionTeam->competition_id == $competition->id ? 'selected' : '' }}>
                    {{ $competition->name }}</option>
            @endforeach
        </select>
        <label>Captain:</label>
        <select name="captain_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $competitionTeam->captain_id == $user->id ? 'selected' : '' }}>
                    {{ $user->firstname }} {{ $user->lastname }}</option>
            @endforeach
        </select>
        <button type="submit">Update</button>
    </form>
>>>>>>> 07a1b80ba1e5bc6062338a3528c2866f5d67200e
</x-base-layout>
