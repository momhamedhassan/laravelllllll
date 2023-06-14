<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    function dbOperations(){
        $result=DB::table('users')
        ->select(
            'avatar',
            'name',
            'type',
            'token',
            'access_token',
            'online_')
        ->where('name',"moahamed")
        ->get();
         return $result;
    }
}
