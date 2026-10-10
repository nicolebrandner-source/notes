<x-app-layout>
    <h1>New post</h1>

    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf

        <label>Headline</label>
        <input type="text" name="headline" value="{{ old('headline') }}" class="border rounded w-full">
        @error('headline') <p class="text-red-600">{{ $message }}</p> @enderror

        <label>Subheadline</label>
        <input type="text" name="subheadline" value="{{ old('subheadline') }}" class="border rounded w-full">
        @error('subheadline') <p class="text-red-600">{{ $message }}</p> @enderror

        <label>Text</label>
        <textarea name="body" class="border rounded w-full">{{ old('body') }}</textarea>
        @error('body') <p class="text-red-600">{{ $message }}</p> @enderror

        <label>
            <input type="checkbox" name="is_published" value="1">
            Publish now
        </label>

        <button type="submit" class="border rounded px-4 py-1">Save</button>
    </form>
</x-app-layout>