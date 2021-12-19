<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::where('package', '!=', null)->count();
        $articleCount = Article::where('publish', '1')->count();
        $draftArticleCount = Article::where('publish', '0')->count();
        
        return view('dashboard.admin.index', compact('userCount', 'articleCount', 'draftArticleCount'));
    }
}
