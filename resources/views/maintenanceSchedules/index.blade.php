<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <div class="max-w-6xl mx-auto space-y-6">
                
                <!-- Header -->
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 flex items-center gap-2">
                        🛠️ <span>Maintenance Schedules</span>
                    </h2>
                    <div class="flex gap-4 justify-end w-full sm:w-auto">
                        <a href="{{ route('maintenanceschedules.create') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-plus text-sm"></i> <span>Create Schedule</span>
                        </a>
                    </div>
                </div>

                <!-- Table -->
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Court</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Start Time</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">End Time</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($maintenanceSchedules as $schedule)
                                <tr class="hover:bg-gray-50 transition duration-200 ease-in-out">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $schedule->id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">{{ $schedule->court->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">{{ $schedule->start_time }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700">{{ $schedule->end_time }}</td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 text-xs rounded-full font-semibold
                                            {{ $schedule->status === 'completed'
                                                ? 'bg-green-600 text-green-100'
                                                : ($schedule->status === 'scheduled'
                                                    ? 'bg-yellow-500 text-yellow-100'
                                                    : 'bg-gray-500 text-white') }}">
                                            {{ ucfirst($schedule->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        <div class="flex gap-3">
                                            <a href="{{ route('maintenanceschedules.show', $schedule->id) }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                                <i class="fas fa-eye text-sm"></i> <span>View</span>
                                            </a>
                                            <a href="{{ route('maintenanceschedules.edit', $schedule->id) }}"
                                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                                <i class="fas fa-edit text-sm"></i> <span>Edit</span>
                                            </a>
                                            <form action="{{ route('maintenanceschedules.destroy', $schedule->id) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200"
                                                    onclick="return confirm('Are you sure you want to delete this schedule?')">
                                                    <i class="fas fa-trash-alt text-sm"></i> <span>Delete</span>
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
                @if ($maintenanceSchedules->isEmpty())
                    <div class="text-center py-12 bg-gray-50 rounded-xl">
                        <div class="mx-auto w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-tools text-xl text-indigo-500"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-700">No maintenance schedules found</h3>
                        <a href="{{ route('maintenanceschedules.create') }}"
                            class="mt-4 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow transition">
                            Create First Schedule
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </main>
</x-base-layout>