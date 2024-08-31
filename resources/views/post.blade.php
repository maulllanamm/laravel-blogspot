<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <main>
        <article class="py-8">
            <h2>{{$post['title']}}</h2>
            <a href="/authors/{{$post->author->id}}">{{$post->author->name}} | {{ $post->created_at->diffForHumans() }}</a>
            <p>{{$post['body']}}</p>
            <a href="/posts">&laquo; Back to post</a>
        </article>
    </main>
</x-layout>

