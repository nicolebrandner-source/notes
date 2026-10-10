<x-app-layout>
    <h1>My favourites</h1>
    @foreach ($posts as $post)
        <p><a href="{{ route('posts.show', $post) }}">{{ $post->headline }}</a></p>
    @endforeach
</x-app-layout>