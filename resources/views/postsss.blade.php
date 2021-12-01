
<!DOCTYPE html>

<title>Guarantees</title>
<link rel="stylesheet" href="/app.css" type="text/css">

<body>

     @foreach($posts as $post)

<article>

    <h1><a href="/posts/{{ $post->slug }}"> {{ $post->title }}</a></h1>

       <p>By <a href="/author/{{ $post->author->id }}">{{ $post->author->name }}</a> in </p> <h3><a href="category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h3>

            <p>{{ $post->excerpt }}</p>

</article>

     @endforeach

</body>

</html>
