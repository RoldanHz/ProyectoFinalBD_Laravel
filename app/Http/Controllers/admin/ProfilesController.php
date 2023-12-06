<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles;
class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profiles=Profiles::all();
        return view('cruds.profiles.procedures.ver', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $profiles=new Profiles;
        $profiles->profile=$request->input('profile');
        $profiles->description=$request->input('description');
        $profiles->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $profiles=Profiles::find( $id );
        $profiles->profile=$request->input('profile');
        $profiles->description=$request->input('description');
        $profiles->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $profiles=Profiles::find( $id );
        $profiles->delete();
        return redirect()->back();
    }
}
