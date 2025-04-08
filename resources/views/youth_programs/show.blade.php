<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">🏫 Program Details</h2>
                <a href="{{ route('youth_programs.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Programs
                </a>
            </div>

            <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-4 text-gray-800">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-500">Name</p>
                        <p class="text-lg font-medium">{{ $youthProgram->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Description</p>
                        <p class="text-lg font-medium">{{ $youthProgram->description }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Age Range</p>
                        <p class="text-lg font-medium">{{ $youthProgram->min_age }} - {{ $youthProgram->max_age }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Schedule</p>
                        <p class="text-lg font-medium">{{ $youthProgram->schedule }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Fee</p>
                        <p class="text-lg font-medium">${{ $youthProgram->fee }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Capacity</p>
                        <p class="text-lg font-medium">{{ $youthProgram->capacity }}</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('youth_programs.edit', $youthProgram->id) }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-edit"></i> Edit Program
                </a>

                <form action="{{ route('youth_programs.destroy', $youthProgram->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this program?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash"></i> Delete Program
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-base-layout>