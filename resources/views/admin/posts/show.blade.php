<x-app-layout>
    <h1>{{ $post->headline }}</h1>
    <h2>{{ $post->subheadline }}</h2>

    @if ($post->is_published)
        <p>Status: Published</p>
    @else
        <p>Status: Draft</p>
    @endif

    <p>{{ $post->body }}</p>

    <a href="{{ route('admin.posts.index') }}">Back to my posts</a>
    <a href="{{ route('admin.posts.edit', $post) }}">Edit</a>
    <form method="POST" action="{{ route('admin.posts.destroy', $post) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="border rounded px-4 py-1 text-red-600">Delete</button>
</form>
</x-app-layout>