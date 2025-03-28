<div class="container">
    <h2>Court Details</h2>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <td>{{ $court->name }}</td>
        </tr>
        <tr>
            <th>Court Type</th>
            <td>{{ $court->court_type }}</td>
        </tr>
        <tr>
            <th>Surface</th>
            <td>{{ $court->surface }}</td>
        </tr>
        <tr>
            <th>Indoor</th>
            <td>{{ $court->indoor ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $court->active ? 'Active' : 'Inactive' }}</td>
        </tr>
    </table>
    <a href="{{ route('courts.edit', $court->id) }}" class="btn btn-warning">Edit Court</a>
    <a href="{{ route('courts.index') }}" class="btn btn-secondary">Back to List</a>
</div>
