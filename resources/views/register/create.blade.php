<x-layout>
    <section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
        <h1 class="font-bold text-center text-xl">Register!</h1>
        <form type="POST" action="/register" class="mt-10">

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                    Username
                </label>
                <input class="border border-gray-400 rounded p-2 w-full" name="username" type="text" id="username" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                    Name
                </label>
                <input class="border border-gray-400 rounded p-2 w-full" name="name" type="text" id="name" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                    Email
                </label>
                <input class="border border-gray-400 rounded p-2 w-full" name="email" type="email" id="email" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                    Password
                </label>
                <input class="border border-gray-400 rounded p-2 w-full" name="password" type="password" id="password" required>
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 rounded text-white py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>


        </form>
        <main/>
    </section>
</x-layout>
