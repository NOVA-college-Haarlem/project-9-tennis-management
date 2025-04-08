{{-- filepath: c:\Users\fevek\Herd\project-9-tennis-management\resources\views\users\show.blade.php --}}
<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">👤 User Details</h2>
                <a href="{{ route('users.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                   <i class="fas fa-arrow-left"></i> Back to Users
                </a>
            </div>

            <!-- Details Section -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-4 text-gray-800">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-500">Firstname</p>
                        <p class="text-lg font-medium">{{ $user->firstname }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Lastname</p>
                        <p class="text-lg font-medium">{{ $user->lastname }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="text-lg font-medium">{{ $user->email }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Phone Number</p>
                        <p class="text-lg font-medium">{{ $user->phonenumber }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Date of Birth</p>
                        <p class="text-lg font-medium">{{ $user->date_of_birth }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Skill Level</p>
                        <p class="text-lg font-medium">{{ $user->skill_level }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Street</p>
                        <p class="text-lg font-medium">{{ $user->street }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">House Number</p>
                        <p class="text-lg font-medium">{{ $user->housenumber }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Postal Code</p>
                        <p class="text-lg font-medium">{{ $user->postal_code }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">City</p>
                        <p class="text-lg font-medium">{{ $user->city }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Role</p>
                        <p class="text-lg font-medium">{{ ucfirst($user->role) }}</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('users.edit', $user->id) }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-edit"></i> Edit User
                </a>

                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this user?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash"></i> Delete User
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-base-layout>