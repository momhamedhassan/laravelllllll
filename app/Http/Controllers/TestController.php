<?php
namespace App\Http\Controllers;

class TestController extends Controller{
    public function index(){
        return [
            "code"=>0,
            "data"=>"mohamed",
            "msg"=>"hassan"
        ];
}
}

