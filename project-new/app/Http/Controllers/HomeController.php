<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user =  \Auth::user();
        if ($user['roll_id'] == 1) {
            return redirect('admin/admindashboard');
        } else {

            return view('home');
        }
    }
    public function product()
    {
        return view('viewallproduct');
    }
}
