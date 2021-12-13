<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategoryArticle;

class HomeController extends Controller
{
    public function index()
    {
        $categoryList = CategoryArticle::all();
        return view('welcome', compact('categoryList'));
    }

    public function aboutBlog()
    {
        $categoryList = CategoryArticle::all();
        return view('about', compact('categoryList'));
    }

    public function contact()
    {
        $categoryList = CategoryArticle::all();
        return view('contact', compact('categoryList'));
    }

    public function show($category)
    {
        $articleList = Article::where('category', $category)->latest()->paginate(4);
        $categoryList = CategoryArticle::all();
        
        return view('blog', compact('articleList', 'categoryList', 'category'));
    }
}
