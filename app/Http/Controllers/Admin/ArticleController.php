<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\CategoryArticle;
use App\Models\User;

class ArticleController extends Controller
{
    public function index()
    {
        $articleList = Article::latest()->get();

        return view('dashboard.admin.articles', compact('articleList'));
    }

    public function create()
    {
        $category = CategoryArticle::all();
        $user = User::all();

        return view('dashboard.admin.components.article.addArticle', compact('category', 'user'));
    }

    public function store(ArticleRequest $request)
    {
        $request->validated();
        $data = $request->all();

        if ($file = $request->file('image')) {
            $coverArticle = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/articles');
            $file->move($destinationPath, $coverArticle);
            $data['image'] = "$coverArticle";
        }

        Article::create($data);

        return redirect()->route('articles.index')->withSuccess('Data has been created');
    }

    public function show($id)
    {
        $category = CategoryArticle::all();
        $showArticleById = Article::findOrFail($id);
        return view('dashboard.admin.components.article.editArticle', compact('showArticleById', 'category'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $request->validated();
        $data = $request->all();

        if ($file = $request->file('image')) {
            $coverArticle = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/articles');
            $file->move($destinationPath, $coverArticle);
            $data['image'] = "$coverArticle";
        }

        Article::findOrFail($id)->update($data);

        return redirect()->route('articles.index')->withSuccess('Data has been updated');
    }

    public function destroy($id)
    {
        Article::findOrFail($id)->delete();

        return redirect()->route('articles.index')->withSuccess('Data has been deleted');
    }
}
