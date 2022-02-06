<x-layout>


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">


        <div class="border-b border-black-700 py-3">
            <h1 class="font-bold text-xl">Your posts:</h1>
        </div>

        <div class="grid grid-cols-4 gap-4">
            <div class="">
                <div class="mb-2">
                    <button type="submit" class="bg-blue-500 rounded text-white py-2 px-4 hover:bg-blue-600">
                        <a href="/admin/posts/create"> New post</a>
                    </button>
                </div>
            </div>

            <div class="col-span-3">
                @foreach($posts as $post)

                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Author
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>

                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img src="https://i.pravatar.cc/40?u={{ $post->author->id }}" alt="avatar" class="rounded-xl">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $post->author->name }}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{ $post->author->email }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm text-red font-medium">
                                            <form method="post" action="/admin/posts/{{ $post->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-sm text-red-500">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>


        </div>
    </main>


</x-layout>
