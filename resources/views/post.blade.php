@extends('layouts.main')

@section('container')
    <artical>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </artical>

    <a href="/blog">back to posts</a>
@endsection