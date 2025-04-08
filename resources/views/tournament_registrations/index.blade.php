<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <div class="max-w-6xl mx-auto space-y-6">
                <!-- Header -->
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 flex items-center gap-2">
                        🏆 <span>Tournament Registrations</span>
                    </h2>

                    <!-- Register Button -->
                    <div class="flex gap-4 justify-end w-full">
                        <a href="{{ route('tournament_registrations.create') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-plus text-sm"></i> <span>Register for Tournament</span>
                        </a>
                    </div>
                </div>

                <!-- Table -->
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    ID
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    User
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    Tournament
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    Registration Date
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($registrations as $registration)
                                <tr class="hover:bg-gray-50 transition duration-200 ease-in-out">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                        {{ $registration->id }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $registration->user->firstname }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $registration->tournament->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $registration->registration_date }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 text-xs rounded-full 
                                            {{ $registration->status === 'approved' ? 'bg-green-600 text-green-100' : 'bg-yellow-600 text-yellow-100' }} font-semibold">
                                            {{ ucfirst($registration->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        <div class="flex gap-3">
                                            <a href="{{ route('tournament_registrations.show', $registration->id) }}"
                                               class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                                <i class="fas fa-eye text-sm"></i> <span class="text-sm">View</span>
                                            </a>
                                            <a href="{{ route('tournament_registrations.edit', $registration->id) }}"
                                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                                <i class="fas fa-pencil-alt text-sm"></i> <span class="text-sm">Edit</span>
                                            </a>
                                            <form action="{{ route('tournament_registrations.destroy', $registration->id) }}"
                                                  method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200"
                                                        onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-trash-alt text-sm"></i> <span class="text-sm">Delete</span>
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
                @if ($registrations->isEmpty())
                    <div class="text-center py-12 bg-gray-50 rounded-xl">
                        <div class="mx-auto w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-futbol text-xl text-indigo-500"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-700">No registrations found</h3>
                        <a href="{{ route('tournament_registrations.create') }}"
                           class="mt-4 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow transition">
                            Register Now
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </main>
</x-base-layout>
