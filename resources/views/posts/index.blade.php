<x-layouts.app>
    <h1 class="">List</h1>

    <ul>
        <li><a href="{{ route('posts.create') }}">Create</a></li>
    </ul>

    @foreach($posts as $post)
        <li><a href="{{ route('posts.show', ['post'=>$post->id]) }}">{{$post->title}}</a></li>
    @endforeach
</x-layouts.app>