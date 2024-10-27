<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Attendee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('attendees.update', $attendee->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" value="{{ $attendee->name }}" class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="{{ $attendee->email }}" class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <select name="event_id" id="event_id" class="form-select" required>
                                <option value="">Select an event</option>
                                @if($events->isEmpty())
                                    <option value="">No events available</option>
                                @else
                                    @foreach($events as $event)
                                        <option value="{{ $event->id }}" @if($event->id == $attendee->event_id) selected @endif>{{ $event->title }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Attendee</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
