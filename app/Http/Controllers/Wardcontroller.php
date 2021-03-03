<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ward;
use Illuminate\Http\Request;

class Wardcontroller extends Controller
{
  public function getAllWards()
  {
    $wards = Ward::all()->toJson(JSON_PRETTY_PRINT);
    return response($wards, 200);
  }
  public function getWard($id)
  {
    if (Ward::where('id', $id)->exists()) {
      $ward = Ward::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
      return response($ward, 200);
    } else {
      return response()->json([
        "message" => "Ward not found"
      ], 404);
    }
  }


  public function createWard(Request $request)
  {
    $ward = new Ward();
    $ward->code = $request->code;
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

  public function updateWard(Request $request, $id)
  {
    if (Ward::where('id', $id)->exists()) {
      $ward = Ward::findOrFail($id);
      $ward->code = $request->code;
      $ward->name = $request->name;
      $ward->name_slug = $request->name_slug;
      $ward->district_code = $request->district_code;
      $ward->province_code = $request->province_code;
      $ward->is_active = $request->is_active;
      $ward->save();

      return response()->json([
        "message" => "records updated successfully"
      ], 200);
    } else {
      return response()->json([
        "message" => "ward not found"
      ], 404);
    }
  }

  public function deleteWard($id)
  {
    $ward = Ward::findOrFail($id);
    $ward->delete();
    return response()->json([
      'message' => 'ward deleted !'
    ], 202);
  }
}
