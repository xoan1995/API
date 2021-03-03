<?php

namespace App\Http\Controllers;

use App\Models\OrgDetail;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class OrgDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllOrgDetails()
    {
        $details = OrgDetail::all()->toJson(JSON_PRETTY_PRINT);
        dd($details);
        return response($details, 200);
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
    public function createOrgDetail(Request $request)
    {
        $orgDetail = new OrgDetail();
        $orgDetail->description = $request->description;
        $orgDetail->about = $request->about;
        $orgDetail->org_bisiness_infor_id = $request->org_bisiness_infor_id;
        $orgDetail->save();

        return response()->json([
            "message" => "Created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrgDetail  $orgDetail
     * @return \Illuminate\Http\Response
     */
    public function getOrgDetail($id)
    {
        if (OrgDetail::where('id', $id)->exists()) {
            $orgDetail = OrgDetail::findOrFail($id)->toJson(JSON_PRETTY_PRINT);
            return response($orgDetail, 200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrgDetail  $orgDetail
     * @return \Illuminate\Http\Response
     */
    public function updateOrgDetail(Request $request, $id)
    {
        if (OrgDetail::where('id', $id)->exists()) {
            $orgDetail = OrgDetail::findOrFail($id);
            $orgDetail->description = $request->description;
            $orgDetail->about = $request->about;
            $orgDetail->org_bisiness_infor_id = $request->org_bisiness_infor_id;
            $orgDetail->save();

            return response()->json([
                'message' => 'Updated!'
            ], 202);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgDetail  $orgDetail
     * @return \Illuminate\Http\Response
     */
    public function deleteOrgDetail($id)
    {
        if (OrgDetail::where('id', $id)->exists()) {
            $orgDetail = OrgDetail::findOrFail($id);
            $orgDetail->delete();

            return response()->json([
                'message' => 'Deleted!'
            ], 202);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }
}
