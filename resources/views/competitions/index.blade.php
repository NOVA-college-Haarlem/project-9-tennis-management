<x-base-layout>
    <div class="container">
        <h2>Competitions</h2>
        <a href="{{ route('competitions.create') }}" class="btn btn-primary mb-3">Create Competition</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($competitions as $competition)
                    <tr>
                        <td>{{ $competition->name }}</td>
                        <td>{{ $competition->start_date }}</td>
                        <td>{{ $competition->end_date }}</td>
                        <td>{{ ucfirst($competition->status) }}</td>
                        <td>
                            <a href="{{ route('competitions.show', $competition->id) }}"
                                class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('competitions.edit', $competition->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('competitions.destroy', $competition->id) }}" method="POST"
                                class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this competition?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-base-layout>
