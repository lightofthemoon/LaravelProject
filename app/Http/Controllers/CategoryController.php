<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Get All Category
        print("Done");
        return 'done1';

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'CategoryName' => 'required|string|max:255',
        ]);

        $category = new Category;
        $category->CategoryName = $validatedData['CategoryName'];
        $category->save();

        return response()->json($category, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'CategoryName' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->CategoryName = $validatedData['CategoryName'];
        $category->save();

        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::findOrFail($id);
        $category->isDeleted = true;
        $category->save();

        return response()->json("Update Delete success", 200);
    }
}
