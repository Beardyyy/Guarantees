<x-layout>
    <section class="px-6 py-8">
        <h1 class=" text-xl font-bold text-center">Create a new post</h1>
        <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            @csrf
            @method('PATCH')

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">Title</label>
                <textarea class="border border-gray-400 rounded p-2 w-full" name="title" id="title" required>{{ $post->title }}</textarea>
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">Slug</label>
                <textarea class="border border-gray-400 rounded p-2 w-full" name="slug" id="slug" required>{{ $post->slug }}</textarea>
                @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <label class="block mb-2 mr-1 uppercase font-bold text-xs text-gray-700" for="thumbnail">Thumbnail</label>
            <div class="flex mb-6">
                <div>
                <input class="border border-gray-400 rounded p-2 w-full" name="thumbnail" type="file" id="thumbnail">
                </div>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="picture" class="rounded-xl ml-6" width="100">
                @error('thumbnail')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">Excerpt</label>
                <textarea class="border border-gray-400 rounded p-2 w-full" name="excerpt" id="excerpt" required>{{ $post->excerpt }}</textarea>
                @error('excerpt')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">Body</label>
                <textarea class="border border-gray-400 rounded p-2 w-full" name="body" id="body" required>{{ $post->body }}</textarea>
                @error('body')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">Category</label>
                <select name="category_id" id="category_id">
                    @foreach(App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                @error('category')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 rounded text-white py-2 px-4 hover:bg-blue-500">
                    Update
                </button>
            </div>

        </form>
    </section>
</x-layout>
