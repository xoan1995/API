<?php

namespace App\Http\Controllers;

use App\Models\OrgBasicInfor;
use Illuminate\Http\Request;

class OrgBasicInforController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllOrgBasicInfors()
    {
        $basicInfors = OrgBasicInfor::all()->toJson(JSON_PRETTY_PRINT);
        return response($basicInfors, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createOrgBasicInfor(Request $request)
    {
        $orgBasicInfor = new OrgBasicInfor();
        $orgBasicInfor->name = $request->name;
        $orgBasicInfor->name_en = $request->name_en;
        $orgBasicInfor->code_tax = $request->code_tax;
        $orgBasicInfor->address = $request->address;
        $orgBasicInfor->province_id = $request->province_id;
        $orgBasicInfor->district_id = $request->district_id;
        $orgBasicInfor->ward_id = $request->ward_id;
        $orgBasicInfor->representative = $request->representative;
        $orgBasicInfor->phone = $request->phone;
        $orgBasicInfor->email = $request->email;
        $orgBasicInfor->civil_scale = $request->civil_scale;
        $orgBasicInfor->founding = $request->founding;
        $orgBasicInfor->org_created = $request->org_created;
        $orgBasicInfor->status = $request->status;
        $orgBasicInfor->org_bisiness_infor_id = $request->org_bisiness_infor_id;
        $orgBasicInfor->save();
        return response()->json([
            "message" => "Created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrgBasicInfor  $orgBasicInfor
     * @return \Illuminate\Http\Response
     */
    public function show(OrgBasicInfor $orgBasicInfor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrgBasicInfor  $orgBasicInfor
     * @return \Illuminate\Http\Response
     */
    public function edit(OrgBasicInfor $orgBasicInfor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrgBasicInfor  $orgBasicInfor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (OrgBasicInfor::where('id', $id)->exists()) {
            $orgBasicInfor = OrgBasicInfor::findOrFail($id);
            $orgBasicInfor->name = $request->name;
            $orgBasicInfor->name_en = $request->name_en;
            $orgBasicInfor->code_tax = $request->code_tax;
            $orgBasicInfor->address = $request->address;
            $orgBasicInfor->province_id = $request->province_id;
            $orgBasicInfor->district_id = $request->district_id;
            $orgBasicInfor->representative = $request->representative;
            $orgBasicInfor->phone = $request->phone;
            $orgBasicInfor->email = $request->email;
            $orgBasicInfor->civil_scale = $request->civil_scale;
            $orgBasicInfor->founding = $request->founding;
            $orgBasicInfor->org_created = $request->org_created;
            $orgBasicInfor->status = $request->status;
            $orgBasicInfor->org_bisiness_infor_id = $request->org_bisiness_infor_id;
            $orgBasicInfor->save();

            return response()->json([
                'message' => 'deleted'
            ], 202);
        } else {
            return response()->json([
                'message' => 'not found'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgBasicInfor  $orgBasicInfor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (OrgBasicInfor::where('id', $id)->exists()) {
            $orgBasicInfor = OrgBasicInfor::findOrFail($id);
            $orgBasicInfor->delete();

            return response()->json([
                'message' => 'deleted'
            ], 202);
        } else {
            return response()->json([
                'message' => 'not found'
            ], 404);
        }
    }
}
