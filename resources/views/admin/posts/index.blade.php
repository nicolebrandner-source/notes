   <x-app-layout>
       <h1>My posts</h1>
       <a href="{{ route('admin.posts.create') }}">+ New post</a>
       @foreach ($posts as $post)
        <p><a href="{{ route('admin.posts.show', $post) }}">{{ $post->headline }}</a></p>
       @endforeach
   </x-app-layout>