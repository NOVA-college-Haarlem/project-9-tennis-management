<<<<<<< HEAD
<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-8">
            <!-- Header Section -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-800">🏟️ Court Details</h2>
                <a href="{{ route('courts.index') }}"
                   class="bg-indigo-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Court List
                </a>
            </div>

            <!-- Details Section -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow-inner space-y-4 text-gray-800">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-500">Name</p>
                        <p class="text-lg font-medium">{{ $court->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Court Type</p>
                        <p class="text-lg font-medium">{{ $court->court_type }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Surface</p>
                        <p class="text-lg font-medium">{{ $court->surface }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Indoor</p>
                        <p class="text-lg font-medium">{{ $court->indoor ? 'Yes' : 'No' }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <span class="inline-block mt-2 px-3 py-1 text-xs rounded-full 
                            {{ $court->active ? 'bg-green-600 text-green-100' : 'bg-gray-500 text-white' }}">
                            {{ $court->active ? 'Active' : 'Inactive' }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('courts.edit', $court->id) }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                    <i class="fas fa-edit"></i> Edit Court
                </a>

                <form action="{{ route('courts.destroy', $court->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this court?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-xl shadow-md hover:shadow-xl flex items-center gap-2 transition duration-300 transform hover:scale-105">
                        <i class="fas fa-trash"></i> Delete Court
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-base-layout>
=======
<x-base-layout><div class="container">
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
</x-base-layout>
>>>>>>> 07a1b80ba1e5bc6062338a3528c2866f5d67200e
