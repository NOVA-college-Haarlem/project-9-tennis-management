<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">🏫 Registration Details</h2>
                <a href="{{ route('youth_registrations.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Registrations
                </a>
            </div>

            <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-4 text-gray-800">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-500">Child Name</p>
                        <p class="text-lg font-medium">{{ $youthRegistration->child_firstname }} {{ $youthRegistration->child_lastname }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Age</p>
                        <p class="text-lg font-medium">{{ $youthRegistration->child_age }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Program</p>
                        <p class="text-lg font-medium">{{ $youthRegistration->program->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Emergency Contact</p>
                        <p class="text-lg font-medium">{{ $youthRegistration->emergency_contact_phone }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <p class="text-lg font-medium">{{ $youthRegistration->status }}</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('youth_registrations.edit', $youthRegistration->id) }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-edit"></i> Edit Registration
                </a>

                <form action="{{ route('youth_registrations.destroy', $youthRegistration->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this registration?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash"></i> Delete Registration
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-base-layout>