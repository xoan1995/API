<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllDistricts()
    {
        $districts = District::all()->toJson(JSON_PRETTY_PRINT);
        dd($districts);
        return response($districts, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDistrict(Request $request)
    {
        $district = new District();
        $district->code = $request->code;
        $district->name = $request->name;
        $district->name_short = $request->name_slug;
        $district->name_slug = $request->name_slug;
        $district->province_code = $request->province_code;
        $district->is_active = $request->is_active;
        $district->save();
        return response()->json([
            "message" => "District record created"
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function getDistrict($id)
    {
        if (District::where('id', $id)->exists()) {
            $district = District::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($district, 200);
        } else {
            return response()->json([
                "message" => "District not found"
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function updateDistrict(Request $request, $id)
    {
        if (District::where('id', $id)->exists()) {
            $district = District::findOrFail($id);
            $district->code = $request->code;
            $district->name = $request->name;
            $district->name_short = $request->name_short;
            $district->name_slug = $request->name_slug;
            $district->province_code = $request->province_code;
            $district->is_active = $request->is_active;
            $district->save();
            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "district not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function deleteDistrict($id)
    {
        $district = District::findOrFail($id);
        $district->delete();
        return response()->json([
            'message' => 'District deleted !'
        ], 202);
    }
}
