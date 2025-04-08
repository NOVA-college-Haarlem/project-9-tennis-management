{{-- filepath: c:\Users\fevek\Herd\project-9-tennis-management\resources\views\users\create.blade.php --}}
<x-base-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Create User</h2>

        <form action="{{ route('users.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="firstname" class="block text-sm font-medium">Firstname</label>
                <input type="text" name="firstname" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('firstname') }}" required>
            </div>

            <div>
                <label for="lastname" class="block text-sm font-medium">Lastname</label>
                <input type="text" name="lastname" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('lastname') }}" required>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="phonenumber" class="block text-sm font-medium">Phone Number</label>
                <input type="text" name="phonenumber" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('phonenumber') }}" required>
            </div>

            <div>
                <label for="date_of_birth" class="block text-sm font-medium">Date of Birth</label>
                <input type="date" name="date_of_birth" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('date_of_birth') }}" required>
            </div>

            <div>
                <label for="skill_level" class="block text-sm font-medium">Skill Level</label>
                <input type="number" name="skill_level" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('skill_level', 1) }}" min="1" required>
            </div>

            <div>
                <label for="street" class="block text-sm font-medium">Street</label>
                <input type="text" name="street" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('street') }}" required>
            </div>

            <div>
                <label for="housenumber" class="block text-sm font-medium">House Number</label>
                <input type="text" name="housenumber" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('housenumber') }}" required>
            </div>

            <div>
                <label for="postal_code" class="block text-sm font-medium">Postal Code</label>
                <input type="text" name="postal_code" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('postal_code') }}" required>
            </div>

            <div>
                <label for="city" class="block text-sm font-medium">City</label>
                <input type="text" name="city" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('city') }}" required>
            </div>

            <div>
                <label for="role" class="block text-sm font-medium">Role</label>
                <select name="role" class="w-full border border-gray-300 rounded px-3 py-2">
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                    <option value="coach" {{ old('role') == 'coach' ? 'selected' : '' }}>Coach</option>
                </select>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Create User</button>
        </form>
    </div>
</x-base-layout>