<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    //

    public function index(Request $resquest){
        return view('user_addresses.index',['addresses' => $resquest->user()->addresses]);
    }
}
