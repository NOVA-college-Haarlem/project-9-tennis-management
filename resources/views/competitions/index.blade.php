<x-base-layout>
<<<<<<< HEAD
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <div class="max-w-6xl mx-auto space-y-6">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 flex items-center gap-2">
                        🏆 <span>Competitions</span>
                    </h2>

                    
                    <!-- Links Container for Buttons (Aligned Right) -->
                    <div class="flex gap-4 justify-end w-full">
                        <!-- Link to Competition Matches -->
                        <a href="{{ route('competition_matches.index') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                           <i class="fas fa-futbol text-sm"></i> <span>Competition Matches</span>
                        </a>

                        <!-- Link to Competition Teams -->
                        <a href="{{ route('competition_teams.index') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                           <i class="fas fa-users text-sm"></i> <span>Competition Teams</span>
                        </a>

                        <!-- Link to Create Competition -->
                        <a href="{{ route('competitions.create') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                           <i class="fas fa-plus text-sm"></i> <span>Create Competition</span>
                        </a>
                    </div>
                </div>

                @foreach($competitions as $competition)
                    <div class="bg-indigo-50 shadow-lg rounded-2xl p-6 hover:shadow-2xl transition duration-300">
                        <div class="flex flex-col h-full">
                            <!-- Competition Info -->
                            <div class="space-y-2 mb-4">
                                <p class="text-lg font-semibold text-gray-800">{{ $competition->name }}</p>
                                <p class="text-sm text-gray-600"><strong>Start Date:</strong> <span class="font-medium text-gray-800">{{ $competition->start_date }}</span></p>
                                <p class="text-sm text-gray-600"><strong>End Date:</strong> <span class="font-medium text-gray-800">{{ $competition->end_date }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Status:</strong>
                                    <span class="inline-block mt-1 px-3 py-1 text-xs rounded-full 
                                        {{ $competition->status === 'active' ? 'bg-green-600 text-green-100' : 
                                           ($competition->status === 'upcoming' ? 'bg-yellow-600 text-yellow-100' : 
                                           'bg-red-600 text-red-100') }}">
                                        {{ ucfirst($competition->status) }}
                                    </span>
                                </p>
                            </div>

                            <!-- Action Buttons -->
                            <div class="mt-auto pt-4 flex flex-wrap gap-2 border-t border-indigo-100">
                                <a href="{{ route('competitions.show', $competition->id) }}"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-eye text-sm"></i> <span class="text-sm">View</span>
                                </a>
                                <a href="{{ route('competitions.edit', $competition->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-pencil-alt text-sm"></i> <span class="text-sm">Edit</span>
                                </a>
                                <form action="{{ route('competitions.destroy', $competition->id) }}" method="POST" onsubmit="return confirm('Delete this competition?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                        <i class="fas fa-trash-alt text-sm"></i> <span class="text-sm">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
=======
    <div class="container">
        <h2>Competitions</h2>
        <a href="{{ route('competitions.create') }}" class="btn btn-primary mb-3">Create Competition</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($competitions as $competition)
                    <tr>
                        <td>{{ $competition->name }}</td>
                        <td>{{ $competition->start_date }}</td>
                        <td>{{ $competition->end_date }}</td>
                        <td>{{ ucfirst($competition->status) }}</td>
                        <td>
                            <a href="{{ route('competitions.show', $competition->id) }}"
                                class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('competitions.edit', $competition->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('competitions.destroy', $competition->id) }}" method="POST"
                                class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this competition?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
>>>>>>> 07a1b80ba1e5bc6062338a3528c2866f5d67200e
</x-base-layout>
