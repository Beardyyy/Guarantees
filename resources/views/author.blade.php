
<!DOCTYPE html>

<title>Guarantees</title>
<link rel="stylesheet" href="/app.css" type="text/css">

<body>

@foreach($posts as $post)

    <h1> {{ $post->author->name }}</h1>

    <article>

        <h4><a href="/posts/{{ $post->slug }}"> {{ $post->title }} </a></h4>

        <p>{{ $post->body }}</p>

    </article>


@endforeach

<a href="/posts">Go back</a>

</body>

</html>
