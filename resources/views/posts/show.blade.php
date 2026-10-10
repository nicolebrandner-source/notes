   <x-app-layout>
       <h1>{{ $post->headline }}</h1>
       <h2>{{ $post->subheadline }}</h2>
          <p>by {{ $post->user->name }}</p>
         <p>{{ $post->body }}</p>
         @auth
    @if (auth()->user()->favorites->contains($post))
        <form method="POST" action="{{ route('favorites.destroy', $post) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="border rounded px-4 py-1">♥ Remove from favourites</button>
        </form>
    @else
        <form method="POST" action="{{ route('favorites.store', $post) }}">
            @csrf
            <button type="submit" class="border rounded px-4 py-1">♡ Add to favourites</button>
        </form>
    @endif
@endauth
            <h3>Comments</h3>
               @foreach ($post->comments as $comment)
                  <p>{{ $comment->user->name }}: {{ $comment->body }}</p>
                     @endforeach
                        @auth
       <form method="POST" action="{{ route('comments.store', $post) }}">
           @csrf
<textarea name="body" class="border rounded w-full"></textarea>
@error('body')
    <p class="text-red-600">{{ $message }}</p>
@enderror
<button type="submit" class="border rounded px-4 py-1">Post comment</button>
</form>
   @endauth
   </x-app-layout>
      