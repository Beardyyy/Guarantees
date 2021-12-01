
<!DOCTYPE html>

<title>Guarantees</title>
<link rel="stylesheet" href="/app.css" type="text/css">

<body>

<article>

    <h1>{{ $post->title }}</h1>

    <p>By <a href="/author/{{ $post->author->id }}">{{ $post->author->name }}</a> in</p><h3><a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h3>

    <p>{{ $post->body }}</p>

</article>

    <a href="/posts">Go back</a>


</body>

</html>
