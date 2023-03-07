<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        return view('news.index', [
            'news' => News::with('user')->latest()->get()
        ]);
    }

    public function show($slug) {
        return view('news.show', [
            'news' => News::with('user')->where('slug', $slug)->first()
        ]);
    }
}
