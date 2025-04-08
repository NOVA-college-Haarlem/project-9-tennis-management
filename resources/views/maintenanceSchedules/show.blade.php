<x-base-layout>
    <main class="container mx-auto my-12 px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            
            <!-- Header -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <h2 class="text-3xl font-bold text-gray-800 text-center sm:text-left">🛠️ Maintenance Schedule Details</h2>
                <a href="{{ route('maintenanceschedules.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>

            <!-- Info -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                    
                    <div class="space-y-4">
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Court</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $maintenanceSchedule->court->name }}</p>
                        </div>

                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Start Time</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $maintenanceSchedule->start_time }}</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">Status</p>
                            <span class="inline-block mt-2 px-3 py-1 text-xs rounded-full font-semibold 
                            {{ $maintenanceSchedule->status === 'completed' 
                                    ? 'bg-green-600 text-green-100' 
                                    : ($maintenanceSchedule->status === 'scheduled' 
                                    ? 'bg-yellow-500 text-yellow-100' 
                                    : 'bg-gray-500 text-white') }}">
                                {{ ucfirst($maintenanceSchedule->status) }}
                            </span>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-sm text-gray-500">End Time</p>
                            <p class="font-medium text-gray-800 text-lg">{{ $maintenanceSchedule->end_time }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Optional Actions -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                <a href="{{ route('maintenanceschedules.edit', $maintenanceSchedule->id) }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center justify-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-pencil-alt"></i> <span>Edit Schedule</span>
                </a>
                
                <form action="{{ route('maintenanceschedules.destroy', $maintenanceSchedule->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="w-full sm:w-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="w-full bg-red-500 hover:bg-red-600 text-white px-3 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center justify-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash-alt"></i> <span>Delete Schedule</span>
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-base-layout>
