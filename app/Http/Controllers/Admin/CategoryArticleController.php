<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\CategoryArticle;
use Illuminate\Support\Str;

class CategoryArticleController extends Controller
{
    public function index()
    {
        $categoriesList = CategoryArticle::all();

        return view('dashboard.admin.categories', compact('categoriesList'));
    }

    public function create(CategoryRequest $request)
    {
        $data = $request->validated();
        CategoryArticle::create([
            'name' => Str::ucfirst($data['name']),
        ]);

        return redirect()->route('admin.categories')->withSuccess('Data has been created');
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = $request->validated();
        CategoryArticle::findOrFail($id)
            ->update([
                'name' => Str::ucfirst($data['name']),
            ]);

        return redirect()->route('admin.categories')->withSuccess('Data has been updated');
    }

    public function destroy($id)
    {
        CategoryArticle::findOrFail($id)->delete();

        return redirect()->route('admin.categories')->withSuccess('Data has been deleted');
    }
}
