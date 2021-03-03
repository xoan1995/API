<?php

namespace App\Http\Controllers;

use App\Models\OrgContact;
use Illuminate\Http\Request;

class OrgContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllOrgContacts()
    {
        $contacts = OrgContact::all()->toJson(JSON_PRETTY_PRINT);
        dd($contacts);
        return response($contacts, 200);
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
    public function createOrgContact(Request $request)
    {
        $orgContact = new OrgContact();
        $orgContact->contact = $request->contact;
        $orgContact->phone_1 = $request->phone_1;
        $orgContact->phone_2 = $request->phone_2;
        $orgContact->email = $request->email;
        $orgContact->address = $request->address;
        $orgContact->status = $request->status;
        $orgContact->org_bisiness_infor_id = $request->org_bisiness_infor_id;
        $orgContact->save();
        return response()->json([
            "message" => "Created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrgContact  $orgContact
     * @return \Illuminate\Http\Response
     */
    public function getOrgContact($id)
    {
        if (OrgContact::where('id', $id)->exists()) {
            $orgContact = OrgContact::findOrFail($id)->toJson(JSON_PRETTY_PRINT);
            return response($orgContact, 200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrgContact  $orgContact
     * @return \Illuminate\Http\Response
     */
    public function editForm(OrgContact $orgContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrgContact  $orgContact
     * @return \Illuminate\Http\Response
     */
    public function updateOrgContact(Request $request, $id)
    {
        if (OrgContact::where('id', $id)->exists()) {
            $orgContact = OrgContact::findOrFail($id);
            $orgContact->contact = $request->contact;
            $orgContact->phone_1 = $request->phone_1;
            $orgContact->phone_2 = $request->phone_2;
            $orgContact->email = $request->email;
            $orgContact->address = $request->address;
            $orgContact->status = $request->status;
            $orgContact->org_bisiness_infor_id = $request->org_bisiness_infor_id;
            $orgContact->save();

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
     * @param  \App\Models\OrgContact  $orgContact
     * @return \Illuminate\Http\Response
     */
    public function deleteOrgContact($id)
    {
        if (OrgContact::where('id', $id)->exists()) {
            $orgContact = OrgContact::findOrFail($id);
            $orgContact->delete();

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
