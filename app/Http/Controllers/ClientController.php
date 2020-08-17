<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ClientController extends Controller
{
    public function index() {

        $room_list = DB::select('select * from room_table');
        return view('client')->with(['rooms' => $room_list]);
    }
}
