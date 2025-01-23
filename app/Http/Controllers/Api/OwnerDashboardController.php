<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Owner\Hostels;
class OwnerDashboardController extends Controller
{
    public function getOwnerDashboard($id)
    {
        // Log the ID to see if it's received
        \Log::info("Received owner ID: " . $id);
    
        // Find the owner by ID
        $owner = Owner::find($id);
    
        if (!$owner) {
            return response()->json([
                'success' => false,
                'message' => 'No owner found with this ID.',
            ], 404);
        }
    
        
        $hostels = Hostels::where('owner_id', $id)->get();
    
        if ($hostels->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Owner found, but no hostels associated.',
                'owner' => $owner,
                'hostels' => [],
            ]);
        }
    
        return response()->json([
            'success' => true,
            'message' => 'Owner and hostels found.',
            'owner' => $owner,
            'hostels' => $hostels,
        ]);
    }
    
}
