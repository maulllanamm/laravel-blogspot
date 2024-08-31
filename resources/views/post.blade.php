<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <main>
        <article class="py-8">
            <h2>{{$post['title']}}</h2>
            <h2>
                By <a href="/authors/{{$post->author->username}}"> {{$post->author->name}}</a>
                In <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                | {{ $post->created_at->diffForHumans() }}
            </h2>
            <p>{{$post['body']}}</p>
            <a href="/posts">&laquo; Back to post</a>
        </article>
    </main>
</x-layout>

