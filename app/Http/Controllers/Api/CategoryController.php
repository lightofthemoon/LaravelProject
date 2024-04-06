<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{

    ///Validate
    public function validationData($request)
    {
        $validatedData = $request->validate([
            'categoryName' => 'required|string|max:255',
        ]);

        return $validatedData;
    }
    public function validate($validatedData, $category) {
        $category->categoryName = $validatedData['categoryName'];
    }

    //Get function

    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    //Post function    
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $category = new Category;
        $this->validate($validatedData, $category);
        $category->save();

        return response()->json($category, 200);
    }
    
    //Put function
    public function update(Request $request, $id)
    {
        $validatedData = $this->validation($request);
        $category = Category::findOrFail($id);
        $category->CategoryName = $validatedData['CategoryName'];
        $category->save();

        return response()->json($category);
    }

    //Delete function
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->isDeleted = 1;
        return response()->json("Delete success", 200);
    }
}
