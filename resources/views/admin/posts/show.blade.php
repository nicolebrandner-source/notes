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
</x-app-layout>