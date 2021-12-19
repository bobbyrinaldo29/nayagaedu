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
<<<<<<< HEAD
            $articleList = Article::where('category', $category)->where('publish', '1')->latest()->paginate(4);
=======
            $articleList = Article::where('category', $category)->latest()->paginate(4);
>>>>>>> a583bca39bf47178dcd40b3e1017a0ff3191e1a6

            return view('blog', compact('articleList', 'categoryList', 'category'));
        } else {
            return redirect()->route('dashboard', compact('categoryList'));
        }
    }

    public function showById($category, $id)
    {
        $categoryList = CategoryArticle::all();

        if (Auth::user()->package !== null || Auth::user()->role == '1') {
            $articleList = Article::where('category', $category)->where('publish', '1')->latest()->paginate(4);
            $articleItem = Article::where('id', $id)->get();
            return view('blogItem', compact('articleItem', 'category', 'articleList', 'categoryList'));
        } else {
            return redirect()->route('dashboard', compact('categoryList'));
        }
    }
}