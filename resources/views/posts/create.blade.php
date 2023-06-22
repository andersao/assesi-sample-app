<x-layouts.app>
    <h1 class="">Create</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year">
        </div>
        <div class="form-group">
            <button type="submit">Create</button>
        </div>
    </form>
</x-layouts.app>
