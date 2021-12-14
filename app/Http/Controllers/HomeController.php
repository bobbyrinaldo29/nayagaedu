<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Support\Facades\Auth;

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
        $categoryList = CategoryArticle::all();

        if (Auth::user()->package !== null || Auth::user()->role == '1') {
            $articleList = Article::where('category', $category)->latest()->paginate(4);

            return view('blog', compact('articleList', 'categoryList', 'category'));
        } else {
            return redirect()->route('dashboard', compact('categoryList'));
        }

        
    }
}
