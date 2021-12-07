<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.articles');
    }

    public function create()
    {
        $category = CategoryArticle::all();

        return view('dashboard.admin.components.article.addArticle', compact('category'));
    }
}
