<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.articles');
    }

    public function create()
    {
        return view('dashboard.admin.components.article.addArticle');
    }
}
