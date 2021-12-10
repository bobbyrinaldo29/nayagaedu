<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articleList = Article::all();

        return view('dashboard.admin.articles', compact('articleList'));
    }

    public function create()
    {
        $category = CategoryArticle::all();

        return view('dashboard.admin.components.article.addArticle', compact('category'));
    }

    public function store(ArticleRequest $request)
    {
        $request->validated();
        $data = $request->all();

        // $data = $request->validated();
        
        if ($file = $request->file('image')) {
            $coverArticle = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/articles');
            $file->move($destinationPath, $coverArticle);
            $data['image'] = "$coverArticle";
        }
        
        // dd($data);
        Article::create(
        //     'title' => Str::ucfirst($data['title']),
        //     'category' => $data['category'],
        //     'editor' => $data['editor'],
            $data,
            // 'content' => $data['content'],
        );

        return redirect()->route('admin.articles')->withSuccess('Data has been created');
    }

    public function show()
    {
        $articleList = Article::latest()->paginate(4);
        $categoryList = CategoryArticle::all();

        $forexList = Article::where('category', 'Forex')->latest()->paginate(4);

        return view('forex', compact('articleList', 'categoryList', 'forexList'));
    }
}
