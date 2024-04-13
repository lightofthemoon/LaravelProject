<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{

    ///Validate

    public function validationData($request)
    {
        $validatedData = $request->validate([
            'courseId' => 'required|string|max:255',
            'teacherId' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'videoUrl' => 'required|string|max:255',
        ]);
        return $validatedData;
    }

    public function validate($validatedData, $account)
    {
        $account->courseId = $validatedData['courseId'];
        $account->teacherId = $validatedData['teacherId'];
        $account->name = $validatedData['name'];
        $account->content = $validatedData['content'];
        $account->videoUrl = $validatedData['videoUrl'];
    }

    //Get function

    public function index()
    {
        $lessons = Lesson::all();
        return response()->json($lessons);
    }

    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return response()->json($lesson);
    }

    //Post function
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $lesson = new Lesson;
        $this->validate($validatedData, $lesson);
        $lesson->save();
        return response()->json($lesson, 200);
    }



    // Put function
    public function update(Request $request, $id)
    {
        $validatedData = $this->validationData($request);
        $lesson = Lesson::findOrFail($id);
        $this->validate($validatedData, $lesson);
        $lesson->save();

        return response()->json($lesson);
    }

    public function restore($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->isDeleted = 0;
        $message = "Restore Lesson Success!";
        return response()->json($message, 200);
    }

    //Delete function
    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->isDeleted = 1;
        return response()->json("Delete Lesson success", 200);
    }
}
