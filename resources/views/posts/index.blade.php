   <x-app-layout>
       <h1>All posts</h1>
          @foreach ($posts as $post)
             <h2>{{ $post->headline }}</h2>
                @endforeach
   </x-app-layout>