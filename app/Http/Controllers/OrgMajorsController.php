<?php

namespace App\Http\Controllers;

use App\Models\OrgMajors;
use Illuminate\Http\Request;

class OrgMajorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllOrgMajors()
    {
        $majors = OrgMajors::all()->toJson(JSON_PRETTY_PRINT);
        dd($majors);
        return response($majors, 200);
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
    public function createOrgMajors(Request $request)
    {
        $orgMajors = new OrgMajors();
        $orgMajors->list_majors = $request->list_majors;
        $orgMajors->relation_org_majors = $request->relation_org_majors;
        $orgMajors->org_bisiness_infor_id = $request->org_bisiness_infor_id;
        $orgMajors->save();
        return response()->json([
            "message" => "Created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrgMajors  $orgMajors
     * @return \Illuminate\Http\Response
     */
    public function getOrgMajors($id)
    {
        if (OrgMajors::where('id', $id)->exists()) {
            $orgMajors = OrgMajors::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($orgMajors, 200);
        } else {
            return response()->json([
                "message" => "OrgMajors not found"
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrgMajors  $orgMajors
     * @return \Illuminate\Http\Response
     */
    public function editForm(OrgMajors $orgMajors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrgMajors  $orgMajors
     * @return \Illuminate\Http\Response
     */
    public function updateOrgMajors(Request $request, $id)
    {
        if (OrgMajors::where('id', $id)->exists()) {
            $orgMajors = OrgMajors::findOrFail($id);
            $orgMajors->list_majors = $request->list_majors;
            $orgMajors->relation_org_majors = $request->relation_org_majors;
            $orgMajors->org_bisiness_infor_id = $request->org_bisiness_infor_id;
            $orgMajors->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "OrgMajors not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgMajors  $orgMajors
     * @return \Illuminate\Http\Response
     */
    public function deleteOrgMajors($id)
    {
        if (OrgMajors::where('id', $id)->exists()) {
            $orgMajors = OrgMajors::findOrFail($id);
            $orgMajors->delete();
            return response()->json([
                "message" => "records deleted successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "OrgMajors not found"
            ], 404);
        }
    }
}
