<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //Validate
    public function validationData($request)
    {
        $validatedData = $request->validate([
            'roleId' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phoneNumber' => 'required|string|max:255',
            'avatar' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        return $validatedData;
    }
    public function validate($validatedData, $account)
    {
        $account->roleId = $validatedData['roleId'];
        $account->name = $validatedData['name'];
        $account->email = $validatedData['email'];
        $account->phoneNumber = $validatedData['phoneNumber'];
        $account->avatar = $validatedData['avatar'];
        $account->password = $validatedData['password'];
    }

    ///Function
    public function checkUserEmail($email)
    {
        $account = Account::where('email', $email)->first();
        if ($account) {
            return true;
        }
        return false;
    }


    ///Get function
    public function index()
    {
        $accounts = Account::with('role')->get();
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

    public function getByUserName($userName)
    {
        try {
            $account = Account::findOrFail($userName);
            return response()->json($account);
        } catch (\Exception $e) {
            return response()->json("Fail");
        }
    }


    //Post function
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $account = Account::where('email', $request->email)->first();
        if (!$account) {
            $account = new Account;
            $this->validate($validatedData, $account);
            $hash_password = bcrypt($account['password']);
            $account->password = $hash_password;
            $account->save();
            return response()->json([
                'errCode' => 0,
                'message' => 'User Create Success'
            ]);
        }
        return response()->json([
            'errCode' => 1,
            'message' => 'User Exist'
        ]);
    }

    public function login(Request $request)
    {
        if (!isset($request->email) || !isset($request->password)) {
            return response()->json([
                'errCode' => 1,
                'message' => 'Email and password are required'
            ]);
        }
        $account = Account::where('email', $request->email)->first();
        $data = [];
        if (isset($account)) {
            if (Hash::check($request->password, $account->password)) {
                $data =  [
                    'errCode' => 0,
                    'errMessage' => 'Ok',
                    'account' => $account
                ];
            } else {
                $data = [
                    'errCode' => 3,
                    'errMessage' => 'Wrong password'
                ];
            }
        } else {
            $data = [
                'errCode' => 1,
                'errMessage' => 'Email Wrong'
            ];
        }
        return response()->json($data);
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
