<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $allNews = News::select('title', 'content', 'slug', 'image', 'created_at')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('pages.news', compact('allNews'));
    }
    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('pages.newsContent', compact('news'));
    }
    
}
