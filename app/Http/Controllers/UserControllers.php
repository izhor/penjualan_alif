<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserControllers extends Controller
{
    public function displayBarang (){
        return view('admin/display_barang');
    }
}
