<?php

namespace App\Http\Controllers;

use App\Models\allusers;
use Illuminate\Http\Request;
use DB;

class AllusersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(allusers $allusers)
    {
        $alluser = DB::table('users')->get(); 
    // dd($alluser);
        return view('admin.viewallusers', compact('alluser'));

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
    }

    /**
     * Display the specified resource.
     */
    public function show(allusers $allusers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($userid,allusers $allusers)
    {
        $alluserfind = $allusers::find($userid);
        // dd($alluserfind);
        return view('admin.editusers', compact('alluserfind'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, allusers $allusers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(allusers $allusers)
    {
        //
    }
}
