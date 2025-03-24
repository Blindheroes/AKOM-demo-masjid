<div class="container">
    <div class="row">
        @foreach ($allNews as $news)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img class="card-img-top" src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" height="200">
                    <div class="card-body">
                        <h5 class="card-title">{{ $news->title }}</h5>
                        <div class="card-text">{!! Str::limit($news->content, 100) !!}</div>
                        <a href="/news/{{ $news->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $news->created_at }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

