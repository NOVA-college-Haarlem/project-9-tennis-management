<x-base-layout>
    <h1>Membership Levels</h1>
    <a href="{{ route('membership-levels.create') }}">Create New Membership Level</a>
    <ul>
        @foreach ($membershipLevels as $level)
            <li>
                {{ $level->name }} - ${{ $level->price }}
                <a href="{{ route('membership-levels.show', $level->id) }}">View</a>
                <a href="{{ route('membership-levels.edit', $level->id) }}">Edit</a>
                <form action="{{ route('membership-levels.destroy', $level->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-base-layout>
