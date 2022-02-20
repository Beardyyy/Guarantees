<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/574.jpg" alt="Laracasts Logo" width="80" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">

            @guest
                <a href="/register" class="ml-3 rounded-full text-xs text-blue-500 font-bold font-semibold uppercase py-3 px-5">
                    Register
                </a>
                <a href="/login" class="ml-3 rounded-full text-xs text-blue-500 font-bold font-semibold uppercase py-3 px-5">
                    Login
                </a>
            @else

                <div x-data="{show:false}" @click.away="show = false" class="">
                    <div @click="show = !show" class="relative">
                        <button class="font-bold py-2 px-2 rounded-xl hover:bg-gray-100">Welcome, {{ auth()->user()->name }}!</button>
                    </div>

                    @if(auth()->user()->id == 3)
                    <div x-show="show" class="py-2 relative text-center bg-gray-100 hover:bg-gray-200 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52">
                            <a href="/admin/posts/dashboard">Admin Dashboard</a>
                    </div>
                    @endif

                    <div x-show="show" class="py-2 relative text-center bg-gray-100 hover:bg-gray-200 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52">
                        <a href="/user/posts/{{ auth()->user()->id }}/dashboard">Posts dashboard</a>
                    </div>
                    <div x-show="show" class="py-2 relative text-center bg-gray-100 hover:bg-gray-200 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52">
                        <a href="/user/{{ auth()->user()->id }}">Account</a>
                    </div>
                    <div  x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()" class="py-2 text-center bg-gray-100 hover:bg-gray-200 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52">
                        <a href="#">Log out</a>
                            <form id="logout-form" method="POST" action="/logout" class="hidden">
                                @csrf
                        </form>
                    </div>
                </div>

            @endguest
        </div>
    </nav>




    {{ $slot }}



    <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="#" class="lg:flex text-sm">
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>

                        <input id="email" type="text" placeholder="Your email address"
                               class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>

@if(session()->has('success'))

    <div class="fixed bottom-1 right-1 bg-blue-500 rounded-xl text-white py-2 px-2 ">
        <p>{{ session('success') }}</p>
    </div>

@endif
</body>
