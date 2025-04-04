<x-base-layout>
    <div class="container">
        <h2>Court List</h2>
        <a href="{{ route('courts.create') }}" class="btn btn-primary mb-3">Create Court</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Court Type</th>
                    <th>Court Condition</th>
                    <th>Surface</th>
                    <th>Indoor</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courts as $court)
                    <tr>
                        <td>{{ $court->id }}</td>
                        <td>{{ $court->name }}</td>
                        <td>{{ $court->court_type }}</td>
                        <td>{{ $court->court_condition }}</td>
                        <td>{{ $court->surface }}</td>
                        <td>{{ $court->indoor ? 'Yes' : 'No' }}</td>
                        <td>{{ $court->active ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('courts.show', $court->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('courts.edit', $court->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('courts.destroy', $court->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-base-layout>
