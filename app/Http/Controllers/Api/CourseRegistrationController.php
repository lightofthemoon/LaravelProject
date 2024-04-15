<?php

namespace App\Http\Controllers;

use App\Models\CourseRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CourseRegistrationController extends Controller
{
    //
    public function validationData($request)
    {
        $validatedData = $request->validate([
            'accountId' => 'required|string|max:255',
            'courseId' => 'required|string|max:255',
            'price' => 'required|numeric|between:10000,99999999',
            'date' => 'required|string|datetime|max:255',
        ]);
        return $validatedData;
    }
    public function validate($validatedData, $courseRegistration)
    {
        $courseRegistration->accountId = $validatedData['accountId'];
        $courseRegistration->roleId = $validatedData['roleId'];
        $courseRegistration->price = $validatedData['price'];
        $courseRegistration->date = $validatedData['date'];
    }
    ///Get function
    public function getByUserId($accountId)
    {
        $courseRegistration = CourseRegistration::where('accountId', $accountId)->first();
        if (isset($courseRegistration)) {
            return response()->json([
                'errCode' => 0,
                'message' => 'Ok',
                'courseRegistration' => $courseRegistration
            ], 200);
        } else {
            return response()->json([
                'errCode' => 1,
                'message' => 'Register Null',
            ], 400);
        }
    }


    //Post function
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $courseRegistration = CourseRegistration::where('accountId', $request->accountId)
            ->where('courseId', $request->courseId)->first();
        if (!isset($courseRegistration)) {
            $courseRegistration = new CourseRegistration;
            $this->validate($validatedData, $courseRegistration);
            $courseRegistration->status = 'Paid';
            $courseRegistration->save();
            return response()->json([
                'errCode' => 0,
                'message' => 'Registration Create Success'
            ], 200);
        }
    }

    //Put function
    public function update(Request $request)
    {
        $validatedData = $this->validationData($request);
        $courseRegistration = CourseRegistration::where('accountId', $request->accountId)
            ->where('courseId', $request->courseId)->first();
        $this->validate($validatedData, $courseRegistration);
        $courseRegistration->save();
        return response()->json($courseRegistration);
    }

    //Delete function
    public function destroy(Request $request)
    {
        $courseRegistration = CourseRegistration::where('accountId', $request->accountId)
            ->where('courseId', $request->courseId)->first();
        $courseRegistration->status = 'Cancel';
        $courseRegistration->save();
        return response()->json("Cancel CourseRegistration success", 200);
    }
}
