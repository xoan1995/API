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
    public function index()
    {
        $allNews = OrgNews::all()->toJson(JSON_PRETTY_PRINT);
        dd($allNews);
      return response($allNews, 200);
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
     * @param  \App\Models\OrgNews  $orgNews
     * @return \Illuminate\Http\Response
     */
    public function show(OrgNews $orgNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrgNews  $orgNews
     * @return \Illuminate\Http\Response
     */
    public function edit(OrgNews $orgNews)
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
    public function update(Request $request, OrgNews $orgNews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrgNews  $orgNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrgNews $orgNews)
    {
        //
    }
}
