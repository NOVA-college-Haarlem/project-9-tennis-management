@if ($errors->any())
    <div class="alert alert-danger bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
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
                <h2 class="text-3xl font-bold text-gray-800">🏆 Create New Team</h2>
                <a href="{{ route('competition_teams.index') }}"
                    class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Teams
                </a>
            </div>

            <!-- Form Section -->
            <form action="{{ route('competition_teams.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Team Name Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Team Name</label>
                        <select name="name"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select Team Name</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->name }}" class="p-2">{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>

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

                    <!-- Captain Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Captain</label>
                        <select name="captain_id"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
                            <option value="" disabled selected>Select Captain</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" class="p-2">{{ $user->firstname }} {{ $user->lastname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-plus"></i> Create Team
                </button>
            </form>
        </div>
    </main>
</x-base-layout>
