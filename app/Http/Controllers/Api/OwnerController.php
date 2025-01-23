<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Models\Owner\Hostels;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Illuminate\Support\Facades\DB;
class OwnerController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'owner_name' => 'required',
            'owner_email' => 'required|email|unique:owners,owner_email', // Ensure email is unique
            'owner_number' => 'required|unique:owners,owner_number', // Ensure number is unique
            'password' => 'required|confirmed',
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(),400);
        }else{
            $data = [
             'owner_name' => $request->owner_name,
             'owner_email' => $request->owner_email,
             'owner_number' => $request->owner_number,
             'password' => Hash::make($request->password),
            ];
            DB::beginTransaction();
            try{
               $owner = Owner::create($data);
                DB::commit();
            } catch(\Exception $e){
            DB::rollBack();
            p($e->getMessage());
            $owner = null;
            }
            if($owner != null){
                return response()->json([
                    'message' => 'Owner Register Successfully'
                ],200);
            } else{
                return response()->json([
                    'message' => 'Internal Sercver Error'
                ]);
            }
        }
    }
    
    
     public function ownerlogin(Request $request)
    {
        $validatedData = $request->validate([
            'owner_number' => 'required|string',
            'password' => 'required|string',
        ]);
    
        // Find the user by phone number
        $owner = Owner::where('owner_number', $validatedData['owner_number'])->first();
    
        // If user doesn't exist or the password doesn't match
        if (!$owner || !Hash::check($validatedData['password'], $owner->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        } 

        $hostels = Hostels::where('owner_id', $owner->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'owner' => $owner,
            'hostels' =>$hostels,
        ]);
    }
}
