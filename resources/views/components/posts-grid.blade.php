@props(['posts'])


<x-first-post :post="$posts[0]"/>



<div class="lg:grid lg:grid-cols-2">

    @foreach($posts->skip(1) as $post)

        <x-post :post="$post"/>

    @endforeach
</div>
