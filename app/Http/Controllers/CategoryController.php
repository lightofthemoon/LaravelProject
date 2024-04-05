<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('update_category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // $this->middleware('verified.csrf');

        $validatedData = $request->validate([
            'categoryName' => 'required|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->categoryName = $validatedData['categoryName'];
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }
    public function create()
    {
        return view('add_category');
    }
    public function store(Request $request)
    {
        // $this->middleware('verified.csrf');

        $validatedData = $request->validate([
            'categoryName' => 'required|max:255',
        ]);

        $category = new Category();
        $category->categoryName = $validatedData['categoryName'];
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json("Delete success", 200);
    }
}