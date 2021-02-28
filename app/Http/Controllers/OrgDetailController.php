<?php

namespace App\Http\Controllers;

use App\Models\OrgDetail;
use Illuminate\Http\Request;

class OrgDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details =OrgDetail::all()->toJson(JSON_PRETTY_PRINT);
        dd($details);
        return response($details, 200);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrgDetail  $orgDetail
     * @return \Illuminate\Http\Response
     */
    public function show(OrgDetail $orgDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrgDetail  $orgDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(OrgDetail $orgDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrgDetail  $orgDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrgDetail $orgDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgDetail  $orgDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrgDetail $orgDetail)
    {
        //
    }
}
