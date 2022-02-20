<x-layout>


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">


        <div class="border-b border-black-700 py-3">
            <h1 class="font-bold text-xl">Your account: {{ $user->name }}</h1>
        </div>

        <section class="px-6 py-8">


            <form action="/user/edit/{{ $user->id }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
                @csrf
                @method('PATCH')

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>
                    <input class="border border-gray-400 rounded p-2 w-full" name="name" type="text" id="name" value="{{ $user->name }}" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 rounded p-2 w-full" name="email" type="email" id="email" value="{{ $user->email }}" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>
                    <input class="border border-gray-400 rounded p-2 w-full" name="password" type="text" id="password" value="{{ bcrypt($user->password) }}" required>
                    @error('password')
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

    </main>


</x-layout>
