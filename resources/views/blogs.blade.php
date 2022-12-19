<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach ($blogs as $blog)
    <h1><a href="/blog/{{$blog->slug}}">{{ $blog->title }}</a></h1>
    <div>
        <p>Author - <a href="/author/{{ $blog->author->username }}">{{ $blog->author->name }}</a></p>
        <h6><a href="/category/{{$blog->category->slug}}">{{ $blog->category->name }}</a></h6>
        <p>{{ $blog->intro }}</p>
    </div>
    @endforeach
</x-layout>