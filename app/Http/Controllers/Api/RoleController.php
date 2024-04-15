<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    ///Validate

    public function validationData($request) {
        $validatedData = $request->validate([
            'roleName' => 'required|string|max:255',
        ]);
        return $validatedData;
    }
    public function validate($validatedData, $role) {
        $role->roleName = $validatedData['roleName'];
    }

    /// Get function

    public function show($id)
    {
        $role = Role::findOrFail($id);
        return response()->json($role);
    }

    public function index()
    {
        $role = Role::all();
        return response()->json($role);
    }

    //Post function
    public function store(Request $request)
    {
        $validatedData = $this->validationData($request);
        $role = new Role;
        $this->validate($validatedData, $role);
        $role->save();

        return response()->json($role, 200);
    }
    



    //Put function
    public function update(Request $request, $id)
    {
        $validatedData = $this->validationData($request);

        $role = Role::findOrFail($id);
        $this->validate($validatedData, $role);
        $role->save();

        return response()->json($role);
    }

    public function restore(Request $request, $id) {
        $role = Role::findOrFail($id);
        $role->isDeleted = 0;
        $role->save();
        return response()->json("Restore Role success", 200);
    }

    //Delete function
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->isDeleted = 1;
        return response()->json("Delete Role success", 200);
    }
}
