@props(['comment'])

<article class="flex bg-gray-50 border border-gray-200 rounded-xl space-x-4 p-6">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="avatar" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <strong>{{ $comment->author->name }}</strong>
            <time class="text-xs">{{ $comment->created_at->diffForHumans() }}</time>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>
