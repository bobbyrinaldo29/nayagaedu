<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function traderTalent()
    {
        return view('trader-talent');
    }

    public function aboutBlog()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
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

    public function showById($category, $id)
    {
        $categoryList = CategoryArticle::all();

        if (Auth::user()->package !== null || Auth::user()->role == '1') {
            $allArticle = Article::where('publish', '1')->latest()->get();
            $articleList = Article::where('category', $category)->where('publish', '1')->latest()->paginate(4);
            $articleItem = Article::where('id', $id)->get();
            return view('blogItem', compact('articleItem', 'category', 'articleList', 'categoryList', 'allArticle'));
        } else {
            return redirect()->route('dashboard', compact('categoryList'));
        }
    }
}
