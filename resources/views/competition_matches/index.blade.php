<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <div class="max-w-6xl mx-auto space-y-6">
                <!-- Header -->
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 flex items-center gap-2">
                        🏆 <span>Competition Matches</span>
                    </h2>

                    <!-- Links Container for Buttons -->
                    <div class="flex gap-4 justify-end w-full">
                        <!-- Create New Match Button -->
                        <a href="{{ route('competition_matches.create') }}"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-plus text-sm"></i> <span>Create New Match</span>
                        </a>
                    </div>
                </div>

                <!-- Table -->
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    Competition</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Team 1
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Team 2
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Time</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Court
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Status
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($matches as $match)
                                <tr class="hover:bg-gray-50 transition duration-200 ease-in-out">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                        {{ $match->competition->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $match->team1->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $match->team2->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $match->scheduled_time }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $match->court->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-3 py-1 text-xs rounded-full 
                                        {{ $match->status === 'active'
                                            ? 'bg-green-600 text-green-100'
                                            : ($match->status === 'upcoming'
                                                ? 'bg-yellow-600 text-yellow-100'
                                                : 'bg-red-600 text-red-100') }} font-semibold">
                                            {{ ucfirst($match->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        <div class="flex gap-3">
                                            <a href="{{ route('competition_matches.show', $match) }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                                <i class="fas fa-eye text-sm"></i> <span class="text-sm">View</span>
                                            </a>
                                            <a href="{{ route('competition_matches.edit', $match) }}"
                                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                                <i class="fas fa-pencil-alt text-sm"></i> <span
                                                    class="text-sm">Edit</span>
                                            </a>
                                            <form action="{{ route('competition_matches.destroy', $match) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                                    <i class="fas fa-trash-alt text-sm"></i> <span
                                                        class="text-sm">Delete</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Empty State -->
                @if ($matches->isEmpty())
                    <div class="text-center py-12 bg-gray-50 rounded-xl">
                        <div class="mx-auto w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-futbol text-xl text-indigo-500"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-700">No matches found</h3>
                        <a href="{{ route('competition_matches.create') }}"
                            class="mt-4 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow transition">
                            Create First Match
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </main>
</x-base-layout>
