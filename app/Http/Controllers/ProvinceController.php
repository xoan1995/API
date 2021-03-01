<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllProvinces()
    {
        $provinces = Province::all()->toJson(JSON_PRETTY_PRINT);
        dd($provinces);
      return response($provinces, 200);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createProvince(Request $request)
    {
        $province = new Province();
        $province -> code = $request->code;
        $province->name = $request->name;
        $province->name_slug = $request->name_slug;
        $province->is_active = $request->is_active;
        $province->save();

        return response()->json([
            "message" => "Province record created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function getProvince($id)
    {
        if (Province::where('id', $id)->exists()) {
            $province = Province::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            dd($province);
            return response($province, 200);
          } else {
            return response()->json([
              "message" => "Province not found"
            ], 404);
          }
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Province $id)
    {
        if (Province::where('id', $id)->exists()) {
            $province = Province::find($id);
            
            $province -> code = is_null($request->code) ? $province -> code : $province -> code;
            $province -> name = is_null($request->name) ? $province -> name : $province -> name;
            $province->name_slug = is_null($request->name_slug) ? $province->name_slug : $province->name;
            $province->is_active = is_null($request->is_active) ? $province->is_active : $province->is_active;
            $province->save();
    
            return response()->json([
              "message" => "records updated successfully"
            ], 200);
          } else {
            return response()->json([
              "message" => "Province not found"
            ], 404);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $id)
    {   $province = Province::findOrFail($id);
        $province->delete();
        return response()->json([
            'message'=>'Province deleted !'
        ],404);
    }
}
