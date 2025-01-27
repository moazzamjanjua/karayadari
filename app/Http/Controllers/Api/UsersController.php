<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Hash;
use App\Models\Review;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index(Request $request)
{
    $validatedData = $request->validate([
        'phone' => 'required|string',
        'password' => 'required|string',
    ]);

    // Find the user by phone number
    $user = User::where('phone', $validatedData['phone'])->first();

    // If user doesn't exist or the password doesn't match
    if (!$user || !Hash::check($validatedData['password'], $user->password)) {
        return response()->json(['error' => 'Invalid credentials'], 401);
    }
  
    // Fetch reviews of the user
    $reviews = Review::where('user_id', $user->id)->with('hostel')->get();

    return response()->json([
        'success' => true,
        'message' => 'Login successful',
        'user' => $user,
        'reviews' => $reviews,
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(),400);
        }else{
            $data = [
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             'password' => Hash::make($request->password),
            ];
            DB::beginTransaction();
            try{
               $user = User::create($data);
                DB::commit();
            } catch(\Exception $e){
            DB::rollBack();
            p($e->getMessage());
            $user = null;
            }
            if($user != null){
                return response()->json([
                    'message' => 'User Register Successfully'
                ],200);
            } else{
                return response()->json([
                    'message' => 'Internal Sercver Error'
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
