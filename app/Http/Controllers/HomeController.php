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

        if (\Auth::user()->isAdmin == "1") {
            return view('admin/admin_frontpage');
        }else {
            return view('user/frontpage');
        }

    }

    public function admin()
    {
        return view('admin/admin_frontpage');
    }

}
