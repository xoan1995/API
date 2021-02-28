<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Wardcontroller extends Controller
{
    public function wards(Request $request){
        $ward = new Ward();
        $ward -> code = $request->code;
        $ward->name = $request->name;
        $ward->name_short = $request->name_slug;
        $ward->name_slug = $request->name_slug;
        $ward->district_code = $request->district_code;
        $ward->province_code = $request->province_code;
        $ward->is_active = $request->is_active;
        $ward->save();

        return response()->json([
            "message" => "Ward record created"
        ], 201);
    }
}
