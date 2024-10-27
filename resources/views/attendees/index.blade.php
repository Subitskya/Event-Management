<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attendees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('attendees.create') }}" class="btn btn-primary mb-3">Create Attendee</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Event</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attendees as $attendee)
                            <tr>
                                <td>{{ $attendee->id }}</td>
                                <td>{{ $attendee->name }}</td>
                                <td>{{ $attendee->email }}</td>
                                <td>{{ $attendee->event->title ?? 'N/A' }}</td>
                                <td class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('attendees.show', $attendee) }}" class="btn btn-sm btn-info text-white rounded-pill shadow-sm px-3">View</a>
                                    <a href="{{ route('attendees.edit', $attendee) }}" class="btn btn-sm btn-primary text-white rounded-pill shadow-sm px-3">Edit</a>
                                    <form action="{{ route('attendees.destroy', $attendee) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger text-white rounded-pill shadow-sm px-3" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination Links -->
                    <div class="mt-4">
                        {{ $attendees->links() }} <!-- This generates the pagination links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
