<x-layout>
    <section class="px-6 py-8">
        <h1 class=" text-xl font-bold text-center">Create new category</h1>
        <form action="/admin/category" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                    Name
                </label>
                <input class="border border-gray-400 rounded p-2 w-full" name="name" type="text" id="name" value="{{ old('name') }}" required>
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                    Slug
                </label>
                <input class="border border-gray-400 rounded p-2 w-full" name="slug" type="text" id="slug" value="{{ old('slug') }}" required>
                @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 rounded text-white py-2 px-4 hover:bg-blue-500">
                    Create
                </button>
            </div>

        </form>
    </section>
</x-layout>
