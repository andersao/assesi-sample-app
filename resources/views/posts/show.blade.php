<x-layouts.app>
    <h1 class="">{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <p>{{$post->year}}</p>
    @if($yearsPast > 0)
        <p>{{$yearsPast}} years ago</p>
    @endif
</x-layouts.app>
