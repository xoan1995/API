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
    public function index()
    {
        $basicInfors =OrgBasicInfor::all()->toJson(JSON_PRETTY_PRINT);
        dd($basicInfors);
        return response($basicInfors, 200);
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
    public function update(Request $request, OrgBasicInfor $orgBasicInfor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgBasicInfor  $orgBasicInfor
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrgBasicInfor $orgBasicInfor)
    {
        //
    }
}
