
@extends ('layouts.main')

@section('container')
<article>
    <h1 class = "mb-5">{{ $post["title"]}}</h1>
    <p>{{ $post["body"]}}</p>
</article>

<a href="/blog">Back To Posts</a>
 @endsection