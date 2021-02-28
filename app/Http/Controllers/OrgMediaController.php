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
    public function index()
    {
        $medias = OrgMedia::all()->toJson(JSON_PRETTY_PRINT);
        dd($medias);
      return response($medias, 200);
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
     * @param  \App\Models\OrgMedia  $orgMedia
     * @return \Illuminate\Http\Response
     */
    public function show(OrgMedia $orgMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrgMedia  $orgMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(OrgMedia $orgMedia)
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
    public function update(Request $request, OrgMedia $orgMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgMedia  $orgMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrgMedia $orgMedia)
    {
        //
    }
}
