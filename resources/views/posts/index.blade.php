   <x-app-layout>
       <h1>All posts</h1>
          @foreach ($posts as $post)
   <h2><a href="{{ route('posts.show', $post) }}">{{ $post->headline }}</a></h2>        
           @endforeach
   </x-app-layout>