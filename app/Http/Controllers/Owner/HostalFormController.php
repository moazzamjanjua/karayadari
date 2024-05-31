<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cities;
use Illuminate\Support\Facades\Auth;
class HostalFormController extends Controller
{
  public function hostelForm($id)
    {
        // Your logic to show the hostel form for the given owner ID
        $cities = cities::all();
        return view('owner.hostel-form', ['ownerId' => $id],['cities' => $cities]);
    }
}
