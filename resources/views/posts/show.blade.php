   <x-app-layout>
       <h1>{{ $post->headline }}</h1>
       <h2>{{ $post->subheadline }}</h2>
          <p>by {{ $post->user->name }}</p>
         <p>{{ $post->body }}</p>
   </x-app-layout>
      