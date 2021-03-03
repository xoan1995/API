<?php

namespace App\Http\Controllers;

use App\Models\OrgBisinessInfor;
use Illuminate\Http\Request;

class OrgBisinessInforController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllOrgBisinessInfor()
    {
        $bisinessInfors = OrgBisinessInfor::all()->toJson(JSON_PRETTY_PRINT);
        return response($bisinessInfors, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOrgBisinessInfor($id)
    {
        if (OrgBisinessInfor::where('id', $id)->exists()) {
            $orgBisinessInfor = OrgBisinessInfor::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($orgBisinessInfor, 200);
        } else {
            return response()->json([
                "message" => "OrgBisinessInfor not found"
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  createOrgBisinessInfor(Request $request)
    {
        $orgBisinessInfor = new OrgBisinessInfor();
        $orgBisinessInfor->name = $request->name;
        $orgBisinessInfor->save();
        return response()->json([
            "message" => "Created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrgBisinessInfor  $orgBisinessInfor
     * @return \Illuminate\Http\Response
     */
    public function show(OrgBisinessInfor $orgBisinessInfor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrgBisinessInfor  $orgBisinessInfor
     * @return \Illuminate\Http\Response
     */
    public function edit(OrgBisinessInfor $orgBisinessInfor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrgBisinessInfor  $orgBisinessInfor
     * @return \Illuminate\Http\Response
     */
    public function updateOrgBisinessInfor(Request $request, $id)
    {
        if (OrgBisinessInfor::where('id', $id)->exists()) {
            $orgBisinessInfor = OrgBisinessInfor::findOrFail($id);
            $orgBisinessInfor->name = $request->name;
            $orgBisinessInfor->save();

            return response()->json([
                'mesage' => 'records updated successfully'
            ], 202);
        } else {
            return response()->json([
                "message" => "OrgBisinessInfor not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgBisinessInfor  $orgBisinessInfor
     * @return \Illuminate\Http\Response
     */
    public function deleteOrgBisinessInfor($id)
    {
        if (OrgBisinessInfor::where('id', $id)->exists()) {
            $orgBisinessInfor = OrgBisinessInfor::findOrFail($id);
            $orgBisinessInfor->delete();

            return response()->json([
                'message' => 'Deleted'
            ]);
        } else {
            return response([
                'message' => 'not found!'
            ]);
        }
    }
}
