<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit Youth Registration</h2>
                <a href="{{ route('youth_registrations.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Registrations
                </a>
            </div>

            <form action="{{ route('youth_registrations.update', $youthRegistration->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Program</label>
                        <select name="program_id" required
                                class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                            @foreach($youthPrograms as $program)
                                <option value="{{ $program->id }}" {{ $program->id == $youthRegistration->program_id ? 'selected' : '' }}>
                                    {{ $program->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Child First Name</label>
                        <input type="text" name="child_firstname" value="{{ $youthRegistration->child_firstname }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Child Last Name</label>
                        <input type="text" name="child_lastname" value="{{ $youthRegistration->child_lastname }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Child Age</label>
                        <input type="number" name="child_age" value="{{ $youthRegistration->child_age }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Emergency Contact Phone</label>
                        <input type="text" name="emergency_contact_phone" value="{{ $youthRegistration->emergency_contact_phone }}" required
                               class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Update Registration
                </button>
            </form>
        </div>
    </main>
</x-base-layout>