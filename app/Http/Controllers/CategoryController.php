<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList()
    {
        return view('category.list');
    }

    public function addNewCategory()
    {
        return view('category.create');
    }

    public function saveCategory(Request $request)
    {
        // dd($request->all()); //Check API all
        $category = Category::create($request->all());
        return redirect()->back()->with('success', true);
    }
}
