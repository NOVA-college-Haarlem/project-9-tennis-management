<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">✏️ Edit User: {{ $user->firstname }}</h2>
                <a href="{{ route('users.index') }}"
                    class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Users
                </a>
            </div>

            <!-- Form Section -->
            <form action="{{ route('users.update', $user->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-6">
                    <!-- Firstname -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Firstname</label>
                        <input type="text" name="firstname" value="{{ old('firstname', $user->firstname) }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Lastname -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Lastname</label>
                        <input type="text" name="lastname" value="{{ old('lastname', $user->lastname) }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input type="text" name="phonenumber" value="{{ old('phonenumber', $user->phonenumber) }}"
                            required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                        <input type="date" name="date_of_birth"
                            value="{{ old('date_of_birth', $user->date_of_birth) }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Skill Level -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Skill Level</label>
                        <input type="number" name="skill_level" value="{{ old('skill_level', $user->skill_level) }}"
                            min="1" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Street -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Street</label>
                        <input type="text" name="street" value="{{ old('street', $user->street) }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- House Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">House Number</label>
                        <input type="text" name="housenumber" value="{{ old('housenumber', $user->housenumber) }}"
                            required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Postal Code -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Postal Code</label>
                        <input type="text" name="postal_code" value="{{ old('postal_code', $user->postal_code) }}"
                            required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- City -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                        <input type="text" name="city" value="{{ old('city', $user->city) }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Role -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                        <select name="role" required
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition">
                            <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User
                            </option>
                            <option value="coach" {{ old('role', $user->role) == 'coach' ? 'selected' : '' }}>Coach
                            </option>
                        </select>
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password (leave blank to keep
                            current password)</label>
                        <input type="password" name="password"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <input type="password" name="password_confirmation"
                            class="w-full p-3 border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-indigo-500 transition" />
                    </div>
                </div>


                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                    <i class="fas fa-save"></i> Update User
                </button>
            </form>
        </div>
    </main>
</x-base-layout>