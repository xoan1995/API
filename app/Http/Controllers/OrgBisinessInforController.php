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
    public function index()
    {
        $bisinessInfors =OrgBisinessInfor::all()->toJson(JSON_PRETTY_PRINT);
        dd($bisinessInfors);
        return response($bisinessInfors, 200);
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
    public function update(Request $request, OrgBisinessInfor $orgBisinessInfor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgBisinessInfor  $orgBisinessInfor
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrgBisinessInfor $orgBisinessInfor)
    {
        //
    }
}
