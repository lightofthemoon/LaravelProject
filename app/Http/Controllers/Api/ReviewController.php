<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    ////Validate() 
    public function validationData($request) {
        $validatedData = $request->validate([
            'courseId' => 'required|string|max:255',
            'accountId' => 'required|string|max:255',
            'rating' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
        ]);
        return $validatedData;
    }
    public function validate($validatedData, $account) {
        $account->courseId = $validatedData['courseId'];
        $account->accountId = $validatedData['accountId'];
        $account->rating = $validatedData['rating'];
        $account->comment = $validatedData['comment'];
    }

    /// Get function()
    public function index()
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        return response()->json($review);
    }

    public function getByCourseId($courseId)
    {
        $reviews = Review::where('courseId', $courseId)->get();
        return response()->json($reviews);
    }
    
    ////Post function
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $review = new Review;
        $this->validate($validatedData, $review);
        $review->save();
        return response()->json($review, 200);
    }

    /// Put function
    public function update(Request $request, $id)
    {
        $validatedData = $this->validationData($request);
        $review = Review::findOrFail($id);
        $this->validate($validatedData, $review);
        $review->save();

        return response()->json($review);
    }


    ///Delete function

    public function destroy($id)
    {
        $review = Account::findOrFail($id);
        $review->isDeleted = 1;
        return response()->json("Delete Review success", 200);
    }
}