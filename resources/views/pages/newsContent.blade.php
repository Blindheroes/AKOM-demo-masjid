<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Berita</h1>
            <div class="news-item">
                <h2>{{ $news->title }}</h2>
                {!! $news->content !!}
                <small>Published on: {{ $news->created_at }}</small>
            </div>
            <hr>
    </div>
</body>
</html>