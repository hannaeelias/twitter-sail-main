{{-- resources/views/posts/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    <a href="{{ route('posts.create') }}">Create New Post</a><br><br>

    <ul>
        @foreach($posts as $post)
            <li>
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <hr>
            </li>
        @endforeach
    </ul>
</body>
</html>
