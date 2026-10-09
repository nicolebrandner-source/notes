   <x-app-layout>
       <h1>{{ $post->headline }}</h1>
       <h2>{{ $post->subheadline }}</h2>
          <p>by {{ $post->user->name }}</p>
         <p>{{ $post->body }}</p>
            <h3>Comments</h3>
               @foreach ($post->comments as $comment)
                  <p>{{ $comment->user->name }}: {{ $comment->body }}</p>
                     @endforeach
   </x-app-layout>
      