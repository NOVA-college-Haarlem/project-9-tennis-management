<x-base-layout>
<<<<<<< HEAD
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <div class="max-w-6xl mx-auto space-y-6">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">🎾 Courts</h2>
                    
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('courts.create') }}"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            ➕ Create Court
                        </a>
                
                        <a href="{{ route('maintenanceschedules.index') }}"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            🛠️ Maintenance Schedule
                        </a>
                    </div>
                </div>
                


                @foreach ($courts as $court)
                    <div class="bg-indigo-50 shadow-lg rounded-2xl p-6 hover:shadow-2xl transition duration-300">
                        <div class="flex flex-col h-full">
                            <!-- Content at top -->
                            <div class="space-y-2 mb-4">
                                <p class="text-lg font-semibold text-gray-800">#{{ $court->id }} – <span
                                        class="text-indigo-600">{{ $court->name }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Court Type:</strong> <span
                                        class="font-medium text-gray-800">{{ $court->court_type }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Surface:</strong> <span
                                        class="font-medium text-gray-800">{{ $court->surface }}</span></p>
                                <p class="text-sm text-gray-600"><strong>Indoor:</strong> <span
                                        class="font-medium text-gray-800">{{ $court->indoor ? 'Yes' : 'No' }}</span></p>
                                <div>
                                    <span
                                        class="inline-block mt-2 px-3 py-1 text-xs rounded-full 
                                        {{ $court->active ? 'bg-green-600 text-green-100' : 'bg-gray-500 text-white' }}">
                                        {{ $court->active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Buttons at bottom with mt-auto -->
                            <div class="mt-auto pt-4 flex flex-wrap gap-2 border-t border-indigo-100">
                                <a href="{{ route('courts.show', $court->id) }}"
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-eye text-sm"></i> <span class="text-sm">View</span>
                                </a>
                                <a href="{{ route('courts.edit', $court->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-pencil-alt text-sm"></i> <span class="text-sm">Edit</span>
                                </a>
                                <form action="{{ route('courts.destroy', $court->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                        <i class="fas fa-trash-alt text-sm"></i> <span class="text-sm">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
=======
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
>>>>>>> 07a1b80ba1e5bc6062338a3528c2866f5d67200e
</x-base-layout>
