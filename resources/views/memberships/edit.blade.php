<x-base-layout>
    <h1>Edit Membership</h1>
    <form action="{{ route('memberships.update', $membership->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="user_id">User:</label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $membership->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->firstname }} {{ $user->lastname }}</option>
            @endforeach
        </select>
        <label for="membership_level_id">Membership Level:</label>
        <select name="membership_level_id" id="membership_level_id">
            @foreach ($membershipLevels as $level)
                <option value="{{ $level->id }}"
                    {{ $membership->membership_level_id == $level->id ? 'selected' : '' }}>
                    {{ $level->name }}</option>
            @endforeach
        </select>
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" value="{{ $membership->start_date }}">
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" value="{{ $membership->end_date }}">
        <label for="active">Active:</label>
        <input type="checkbox" name="active" id="active" value="1" {{ $membership->active ? 'checked' : '' }}>
        <label for="balance">Balance:</label>
        <input type="number" name="balance" id="balance" step="0.01" value="{{ $membership->balance }}">
        <button type="submit">Update</button>
    </form>
</x-base-layout>
