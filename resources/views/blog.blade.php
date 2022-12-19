<x-layout>
    <x-slot name="title">
        <title>{{ $blog->title }}</title>
    </x-slot>
    <article>
        <h1><?= $blog->title ?></h1>
        <small>{{ $blog->created_at->diffForHumans() }}</small>
        <p class="mt-3"><?= $blog->body ?></p>
    </article>
    <a href="/">Back</a>
</x-layout>