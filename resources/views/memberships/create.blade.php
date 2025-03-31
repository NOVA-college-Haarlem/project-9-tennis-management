<h1>Create Membership</h1>
<form action="{{ route('memberships.store') }}" method="POST">
    @csrf
    <label for="user_id">User:</label>
    <select name="user_id" id="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <label for="membership_level_id">Membership Level:</label>
    <select name="membership_level_id" id="membership_level_id">
        @foreach ($membershipLevels as $level)
            <option value="{{ $level->id }}">{{ $level->name }}</option>
        @endforeach
    </select>
    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" id="start_date">
    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" id="end_date">
    <label for="active">Active:</label>
    <input type="checkbox" name="active" id="active" value="1">
    <label for="balance">Balance:</label>
    <input type="number" name="balance" id="balance" step="0.01">
    <button type="submit">Create</button>
</form>
