<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryForm()
    {
        return view('pages.category');
    }

    public function categoriesStore(Request $request)
    {

        $categories = $request->all();

        // dd($categories);

        Category::create([
            'category' => $request->category,
            ]);

        return view('pages.categories', compact('categories'))->with('success', 'Category created successfully');
    }
}
