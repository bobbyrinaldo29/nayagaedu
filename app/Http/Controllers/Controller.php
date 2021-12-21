<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategoryArticle;
use App\Models\Message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
  {
    $categoryList = CategoryArticle::all();
    $articleList = Article::latest()->get();
    $messageAll = Message::all()->sortByDesc('created_at');

    $messageCount = Message::where('read', 0)->get();

    // Sharing is caring
    View::share(compact('messageCount', 'categoryList', 'messageAll', 'articleList'));
  }
}
