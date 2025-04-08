{{-- filepath: c:\Users\fevek\Herd\project-9-tennis-management\resources\views\users\show.blade.php --}}
<x-base-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">{{ $user->firstname }} Details</h2>
        <div class="bg-white shadow-md rounded p-6">
            <p><span class="font-bold">First Name:</span> {{ $user->firstname }}</p>
            <p><span class="font-bold">Last Name:</span> {{ $user->lastname }}</p>
            <p><span class="font-bold">Email:</span> {{ $user->email }}</p>
            <p><span class="font-bold">Phone Number:</span> {{ $user->phone_number }}</p>
            <p><span class="font-bold">Date of Birth:</span> {{ $user->date_of_birth }}</p>
            <p><span class="font-bold">Skill Level:</span> {{ $user->skill_level }}</p>
            <p><span class="font-bold">Availability:</span> {{ $user->availability }}</p>
            <p><span class="font-bold">Street:</span> {{ $user->street }}</p>
            <p><span class="font-bold">House Number:</span> {{ $user->housenumber }}</p>
            <p><span class="font-bold">Postal Code:</span> {{ $user->postal_code }}</p>
            <p><span class="font-bold">City:</span> {{ $user->city }}</p>
        </div>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</x-base-layout>
