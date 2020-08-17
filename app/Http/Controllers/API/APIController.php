<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class APIController extends Controller
{

    public function getRoom()
    {
        $room_list = DB::select('select * from room_table');
        if(!$room_list) {
            return response()->json(['status' => '404', 'error_code' => '1', 'message' => 'Field not exist.']);
        } else {
            return response()->json(['status' => '200', 'error_code' => '0', 'message' => 'success', 'data' => $room_list]);
        }
    }

    public function createRoom(Request $request) {
        $find_room = DB::select('select * from room_table where room_name = "'.$request->room_name.'"', [1]);
        if (count($find_room) > 0) {
            return response()->json(['status' => '200', 'error_code' => '0', 'message' => 'Field exist already']);
        } else {
            $result = DB::insert('insert into room_table (room_name) values ("'.$request->room_name.'")', [1, 'Dayle']);
            if(!$result) {
                return response()->json(['status' => '404', 'error_code' => '1', 'message' => 'Something went wrong.']);
            } else {
                return response()->json(['status' => '200', 'error_code' => '0', 'message' => 'Successfully added room.']);
            }
        }
    }
}