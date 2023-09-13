<?php

namespace App\Http\Controllers;

use App\Models\allusers;
use Illuminate\Http\Request;
use DB;
use Validator;
use Session;

class AllusersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(allusers $allusers)
    {
        $alluser = $allusers->get();
        // dd($alluser);
        return view('admin/allusers', compact('alluser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createnewuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        // dd($request->all());
        $rules = array(
            'name'       => 'required',
            'email'      => 'required',
            'password' => 'required',
            // 'profile_pic' => 'required|mimes:jpeg,jpg,png,gif'
        );
        $validator = Validator::make($request->all(), $rules);
        // $imageName = time().'.'.$request->profile_pic->getClientOriginalExtension();
        // $request->profile_pic->move(public_path('/uploads'), $imageName);

        $image = $request->file('profile_pic');

        $new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/uploads'), $new_name);



        // dd($validator);
        if ($validator->fails()) {
            return Redirect('admin/allusers/create')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'profile_pic' => $new_name

            ]);

            return Redirect('admin/allusers');
        }
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
    public function edit($userid, allusers $allusers)
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
