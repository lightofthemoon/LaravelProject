<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index()
    {
        $course = Course::all();
        return response()->json($course);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'categoryId' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'startDate' => 'required|date',
            'price' => 'required|decimal',
            'imageURL' => 'required|string|max:255',
            'demoVideo' => 'required|string|max:255',
            'note' => 'required|string|max:255'
        ]);

        $course = new Course;
        $course->categoryId = $validatedData['categoryId'];
        $course->title = $validatedData['title'];
        $course->description = $validatedData['description'];
        $course->startDate = $validatedData['startDate'];
        $course->price = $validatedData['price'];
        $course->imageURL = $validatedData['imageURL'];
        $course->demoVideo = $validatedData['demoVideo'];
        $course->note = $validatedData['note'];
        $course->save();

        return response()->json($course, 200);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return response()->json($course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'categoryId' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'startDate' => 'required|date',
            'price' => 'required|decimal',
            'imageURL' => 'required|string|max:255',
            'demoVideo' => 'required|string|max:255',
            'note' => 'required|string|max:255'
        ]);

        $course = Course::findOrFail($id);
        $course->categoryId = $validatedData['categoryId'];
        $course->title = $validatedData['title'];
        $course->description = $validatedData['description'];
        $course->startDate = $validatedData['startDate'];
        $course->price = $validatedData['price'];
        $course->imageURL = $validatedData['imageURL'];
        $course->demoVideo = $validatedData['demoVideo'];
        $course->note = $validatedData['note'];
        $course->save();

        return response()->json($course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->isDeleted = 1;
        return response()->json("Delete success", 200);
    }
}
