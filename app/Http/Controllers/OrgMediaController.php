<?php

namespace App\Http\Controllers;

use App\Models\OrgMedia;
use Illuminate\Http\Request;

class OrgMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllOrgMedias()
    {
        $medias = OrgMedia::all()->toJson(JSON_PRETTY_PRINT);
        return response($medias, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm()
    {
        return view('createForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createOrgMedia(Request $request)
    {
        $orgMedia = new OrgMedia();
        $orgMedia->url = $request->url;
        $orgMedia->link = $request->link;
        $orgMedia->logo = $request->logo;
        $orgMedia->avatar = $request->avatar;
        $orgMedia->img_supple = $request->img_supple;
        $orgMedia->img_certificate = $request->img_certificate;
        $orgMedia->size = $request->size;
        $orgMedia->status = $request->status;
        $orgMedia->org_bisiness_infor_id = $request->org_bisiness_infor_id;
        $orgMedia->save();
        return response()->json([
            'message' => 'OrgMedia record created'
        ], 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrgMedia  $orgMedia
     * @return \Illuminate\Http\Response
     */
    public function getOrgMedia($id)
    {
        if (OrgMedia::where('id', $id)->exists()) {
            $orgMedia = OrgMedia::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($orgMedia, 200);
        } else {
            return response()->json([
                'message' => 'Not founded!'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrgMedia  $orgMedia
     * @return \Illuminate\Http\Response
     */
    public function editForm(OrgMedia $orgMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrgMedia  $orgMedia
     * @return \Illuminate\Http\Response
     */
    public function updateOrgMedia(Request $request, $id)
    {
        if (OrgMedia::where('id', $id)->exists()) {
            $orgMedia = OrgMedia::findOrFail($id);
            $orgMedia->url = $request->url;
            $orgMedia->link = $request->link;
            $orgMedia->logo = $request->logo;
            $orgMedia->avatar = $request->avatar;
            $orgMedia->img_supple = $request->img_supple;
            $orgMedia->img_certificate = $request->img_certificate;
            $orgMedia->size = $request->size;
            $orgMedia->status = $request->status;
            $orgMedia->org_bisiness_infor_id = $request->org_bisiness_infor_id;
            $orgMedia->save();
            return response()->json([
                'message' => 'Updated!'
            ], 202);
        } else {
            return response()->json([
                'message' => 'Not founded!'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgMedia  $orgMedia
     * @return \Illuminate\Http\Response
     */
    public function deleteOrgMedia($id)
    {
        if (OrgMedia::where('id', $id)->exists()) {
            $orgMedia = OrgMedia::findOrFail($id);
            $orgMedia->delete();
            return response()->json([
                'message' => 'Deleted'
            ], 202);
        } else {
            return response()->json([
                'message' => 'Not founded!'
            ], 404);
        }
    }
}
