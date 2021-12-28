<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Message;
use App\Models\Package;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $message = Message::all();
        $userCount = User::where('package', '!=', null)->count();
        $articleCount = Article::where('publish', '1')->count();
        $draftArticleCount = Article::where('publish', '0')->count();
        $packageCount = Package::all()->count();

        return view('dashboard.admin.index', compact('userCount', 'articleCount', 'draftArticleCount', 'message', 'packageCount'));
    }
}
