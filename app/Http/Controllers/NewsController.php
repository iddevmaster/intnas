<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('content.news.allnews');
    }

    public function addNews()
    {
        return view('content.news.add-news');
    }

    public function editNews()
    {
        return view('content.news.edit-news');
    }
}
