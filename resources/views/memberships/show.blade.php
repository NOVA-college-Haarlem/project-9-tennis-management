<x-base-layout>
    <h1>Membership Details</h1>
    <p>User: {{ $membership->user->firstname }} {{ $membership->user->lastname }}</p>
    <p>Membership Level: {{ $membership->membershipLevel->name }}</p>
    <p>Start Date: {{ $membership->start_date }}</p>
    <p>End Date: {{ $membership->end_date }}</p>
    <p>Active: {{ $membership->active ? 'Yes' : 'No' }}</p>
    <p>Balance: {{ $membership->balance }}</p>
    <a href="{{ route('memberships.edit', $membership->id) }}">Edit</a>
    <form action="{{ route('memberships.destroy', $membership->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</x-base-layout>
