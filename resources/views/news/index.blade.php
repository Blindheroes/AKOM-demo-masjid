@extends('layouts.news')

@section('title', $news->title)

@section('meta')
    <meta name="title" content="{{ $news->title }}">
    <meta name="description" content="{{ Str::limit(strip_tags($news->content), 150) }}">
    <meta name="keywords" content="news, {{ $news->title }}">
    <meta property="og:title" content="{{ $news->title }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($news->content), 150) }}">
    <meta property="og:image" content="{{ asset('storage/' . $news->image) }}">
    <meta property="og:url" content="{{ url('news/' . $news->slug) }}">
    <meta property="og:type" content="article">
@endsection

@section('content')
<div class="news-article text-justify text-center">
    <h1>{{ $news->title }}</h1>
    <p><small>Last updated: {{ $news->updated_at->format('F d, Y') }}</small></p>
    <div class="text-center">
        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid max-h-60">
    </div>
    <div class="content text-justify">
        {!! $news->content !!}
    </div>
</div>
@endsection