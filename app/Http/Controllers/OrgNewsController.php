<?php

namespace App\Http\Controllers;

use App\Models\OrgNews;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class OrgNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllOrgNews()
    {
        $allNews = OrgNews::all()->toJson(JSON_PRETTY_PRINT);
        return response($allNews, 200);
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
    public function createOrgNews(Request $request)
    {
        $orgNew = new OrgNews();
        $orgNew->news_category = $request->news_category;
        $orgNew->detailed_article = $request->detailed_article;
        $orgNew->org_bisiness_infor_id = $request->org_bisiness_infor_id;
        $orgNew->save();
        return response()->json([
            "message" => "OrgNews record created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrgNews  $orgNews
     * @return \Illuminate\Http\Response
     */
    public function getOrgNews($id)
    {
        if (OrgNews::where('id', $id)->exists()) {
            $orgNew = OrgNews::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($orgNew, 200);
        } else {
            return response()->json([
                "message" => "News not found"
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrgNews  $orgNews
     * @return \Illuminate\Http\Response
     */
    public function editForm(OrgNews $orgNews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrgNews  $orgNews
     * @return \Illuminate\Http\Response
     */
    public function updateOrgNews(Request $request, $id)
    {
        if (OrgNews::where('id', $id)->exists()) {
            $orgNew = OrgNews::findOrFail($id);
            $orgNew->news_category = $request->news_category;
            $orgNew->detailed_article = $request->detailed_article;
            $orgNew->org_bisiness_infor_id = $request->org_bisiness_infor_id;
            $orgNew->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "News not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgNews  $orgNews
     * @return \Illuminate\Http\Response
     */
    public function deleteOrgNews($id)
    {
        if (OrgNews::where('id', $id)->exists()) {
            $orgNew = OrgNews::findOrFail($id);
            $orgNew->delete();
            return response()->json([
                'message' => 'News deleted !'
            ], 202);
        } else {
            return response()->json([
                "message" => "News not found"
            ], 404);
        }
    }
}
