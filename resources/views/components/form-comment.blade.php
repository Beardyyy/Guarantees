@props(['post'])

<form action="/posts/{{ $post->id }}/comment" method="POST" class="bg-gray-50 border border-gray-200 p-6 rounded-xl">
    @csrf
    <header class="flex items-center">
        <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}" alt="avatar" class="rounded-xl">
            <h2 class="ml-3">Want to participate?</h2>
    </header>
    <div class="mt-4">
        <textarea name="body" class="w-full text-sm border border-gray-200 rounded-xl" cols="20" rows="3" placeholder="Write something..." required></textarea>
            @error('body')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded-full text-white">Post</button>
    </div>
</form>
