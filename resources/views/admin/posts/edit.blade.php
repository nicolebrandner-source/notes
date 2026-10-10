<x-app-layout>
    <h1>Edit post</h1>

    <form method="POST" action="{{ route('admin.posts.update', $post) }}">
        @csrf
        @method('PUT')

        <label>Headline</label>
        <input type="text" name="headline" value="{{ old('headline', $post->headline) }}" class="border rounded w-full">
        @error('headline') <p class="text-red-600">{{ $message }}</p> @enderror

        <label>Subheadline</label>
        <input type="text" name="subheadline" value="{{ old('subheadline', $post->subheadline) }}" class="border rounded w-full">
        @error('subheadline') <p class="text-red-600">{{ $message }}</p> @enderror

        <label>Text</label>
        <textarea name="body" class="border rounded w-full">{{ old('body', $post->body) }}</textarea>
        @error('body') <p class="text-red-600">{{ $message }}</p> @enderror

        <label>
            <input type="checkbox" name="is_published" value="1" @checked($post->is_published)>
            Published
        </label>

        <button type="submit" class="border rounded px-4 py-1">Save changes</button>
    </form>
</x-app-layout>