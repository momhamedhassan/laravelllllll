<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\JsonDecoder;

class ThirdPartyController extends Controller
{
    public function index(){
      $response= Http::get('https://test-third-baseline.onrender.com/api/Testing');
      
      return ["response"=>json_decode($response->body())];
      
    }
}