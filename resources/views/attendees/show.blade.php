<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attendee Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Name:</h3>
                        <p>{{ $attendee->name }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Email:</h3>
                        <p>{{ $attendee->email }}</p>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Event:</h3>
                        <p>{{ $attendee->event->title ?? 'N/A' }}</p>
                    </div>
                    
                    <a href="{{ route('attendees.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
