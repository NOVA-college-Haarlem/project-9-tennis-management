<x-base-layout>
    <h1>Memberships</h1>
    <a href="{{ route('memberships.create') }}">Create New Membership</a>
    <ul>
        @foreach ($memberships as $membership)
            <li>
                {{ $membership->user->firstname }} {{ $membership->user->lastname }} -
                {{ $membership->membershipLevel->name }}
                <a href="{{ route('memberships.show', $membership->id) }}">View</a>
                <a href="{{ route('memberships.edit', $membership->id) }}">Edit</a>
                <form action="{{ route('memberships.destroy', $membership->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-base-layout>
