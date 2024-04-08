<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
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
        $course = Course::all();
        return response()->json($course);
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return response()->json($course);
    }
    

    // Post function
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $course = new Course;
        $this->validation($request, $course);
        $course->save();

        return response()->json($course, 200);
    }
    

    // Put function
    public function update(Request $request, $id)
    {
        $validatedData = $this->validationData($request);
        $course = Course::findOrFail($id);
        validate($validatedData, $course);
        $course->save();

        return response()->json($course);
    }

    public function restore($id) {
        $course = Course::findOrFail($id);
        $course->isDeleted = 0;
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
