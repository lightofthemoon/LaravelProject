<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    //Validate
    public function validationData($request) {
        $validatedData = $request->validate([
            'roleId' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'email' => 'required|string|email|max:255',
            'phoneNumber' => 'required|string|max:255',
            'avatar' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        return $validatedData;
    }
    public function validate($validatedData, $account) {
        $account->roleId = $validatedData['roleId'];
        $account->name = $validatedData['name'];
        $account->birthday = $validatedData['birthday'];
        $account->email = $validatedData['email'];
        $account->phoneNumber = $validatedData['phoneNumber'];
        $account->avatar = $validatedData['avatar'];
        $account->gender = $validatedData['gender'];
        $account->password = $validatedData['password'];
    }


    ///Get function
    public function index()
    {
        $accounts = Account::all();
        return response()->json($accounts);
    }

    public function show($id)
    {
        try {
            $account = Account::findOrFail($id);
            return response()->json($account);
        } catch (\Exception $e) {
            return response()->json("Account not found!", 404);
        }
    }
    
    //Post function
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $account = new Account;
        $this->validate($validatedData, $account);
        $account->save();
        return response()->json($account, 200);
    }
    
    //Put function
    public function update(Request $request, $id)
    {
        $validatedData = $this->validationData($request);
        $account = Account::findOrFail($id);
        $this->validate($validatedData, $account);
        $account->save();

        return response()->json($account);
    }

    //Delete function
    public function destroy($id)
    {
        $account = Account::findOrFail($id);
        $account->isDeleted = 1;
        return response()->json("Delete Account success", 200);
    }
}
