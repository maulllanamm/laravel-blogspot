<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <main>
        @foreach($posts as $post)
            <article class="py-8">
                <a href="/posts/{{$post['slug']}}">
                    <h2>{{$post['title']}}</h2>
                </a>
                <h2>
                    By <a href="/authors/{{$post->author->username}}"> {{$post->author->name}}</a>
                    In <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                     | {{ $post->created_at->diffForHumans() }}
                </h2>
                <p>{{Str::limit($post['body'], 150)}}</p>
                <a href="/posts/{{$post['slug']}}">Read more &raquo;</a>
            </article>
        @endforeach

    </main>
</x-layout>

