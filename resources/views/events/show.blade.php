<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Title:</h3>
                        <p>{{ $event->title }}</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Date:</h3>
                        <p>{{ $event->date }}</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Location:</h3>
                        <p>{{ $event->location }}</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Category:</h3>
                        <p>{{ $event->category->name }}</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Description:</h3>
                        <p>{{ $event->description }}</p>
                    </div>
                    <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
