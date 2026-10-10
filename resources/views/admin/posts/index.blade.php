   <x-app-layout>
       <h1>My posts</h1>
       @foreach ($posts as $post)
           <p>{{ $post->headline }}</p>
       @endforeach
   </x-app-layout>