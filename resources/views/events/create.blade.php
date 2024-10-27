<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('events.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" name="description" id="description" class="form-control" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" name="location" id="location" class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <label for="category_id" class="form-label">Category</label>
                            <select name="category_id" id="category_id" class="form-select" required>
                                <option value="">Select a category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
