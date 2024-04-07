<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    ///Validate
    public function validationData($request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max: 10',
            'email' => 'required|string|max:255',
            'avatar' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
        ]);
        return $validatedData;
    }
    public function validate($validatedData, $teacher) {
        $teacher->name = $validatedData['name'];
        $teacher->phoneNumber = $validatedData['phoneNumber'];
        $teacher->email = $validatedData['email'];
        $teacher->avatar = $validatedData['avatar'];
        $teacher->gender = $validatedData['gender'];
    }

    /// Get function

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return response()->json($teacher);
    }

    public function index()
    {
        $teacher = Teacher::all();
        return response()->json($teacher);
    }

    //Post function
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $teacher = new Teacher;
        $this->validate($validatedData, $teacher);
        $teacher->save();
        return response()->json($teacher, 200);
    }
    



    //Put function
    public function update(Request $request, $id)
    {
        $validatedData = $this->validationData($request);

        $teacher = Teacher::findOrFail($id);
        $this->validate($validatedData, $teacher);
        $teacher->save();

        return response()->json($teacher);
    }

    //Delete function
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->isDeleted = 1;
        return response()->json("Delete Teacher Success", 200);
    }
}
