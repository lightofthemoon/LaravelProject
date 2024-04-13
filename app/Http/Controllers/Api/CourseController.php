<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Models\Category;
class CourseController extends Controller
{
    //Validate
    public function validationData($request)
    {
        $validatedData = $request->validate([
            'categoryId' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'startDate' => 'required|date',
            'price' => 'required|numeric|between:0,99999999.99',
            'imageURL' => 'required|string|max:255',
            'demoVideo' => 'required|string|max:255',
            'note' => 'required|string|max:255'
        ]);
        return $validatedData;
    }
    public function validation($validatedData, $course) {
        $course->categoryId = $validatedData['categoryId'];
        $course->title = $validatedData['title'];
        $course->description = $validatedData['description'];
        $course->startDate = $validatedData['startDate'];
        $course->price = $validatedData['price'];
        $course->imageURL = $validatedData['imageURL'];
        $course->demoVideo = $validatedData['demoVideo'];
        $course->note = $validatedData['note'];
    }

    //Get function
    public function index()
    {
        $courses = Course::with('category')->get();
        return CourseResource::collection($courses)->map(function ($resource) {
            return $resource->toArray(request());
        })->all();
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return response()->json($course);
    }
    //Get by courseCategoryId
    public function showByCategory($categoryId)
    {
        $courses = Course::where('categoryId', $categoryId)
                        ->get();
    
        return response()->json($courses);
    }


    // Post function
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $category = Category::findOrFail($validatedData['categoryId']);
        if(!isset($category)) {
            return response()->json("CategoryNotFound", 404);
        }
        $course = new Course;
        $this->validation($request, $course);
        $course->save();

        return response()->json($course, 200);
    }
    

    // Put function
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $validatedData = $this->validationData($request);

        if($course->categoryId !== $request->categoryId) {
            $category = Category::findOrFail($course->categoryId);
            if (isset($category)) {
                return response()->json(['error' => 'Category not found'], 404);
            }
        }
        $this->validation($validatedData, $course);

        $course->save();
        return response()->json($course, 200);
    }

    public function restore($id) {
        $course = Course::findOrFail($id);
        $course->isDeleted = 0;
        $course->save();
        return response()->json("Restore Course success", 200);
    }

    //Delete function
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->isDeleted = 1;
        return response()->json("Delete Course success", 200);
    }

}
