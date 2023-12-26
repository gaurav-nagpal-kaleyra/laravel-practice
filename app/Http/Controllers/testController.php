<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class testController extends Controller
{
    public function test(Request $request){
        return "My First laravel Project";
    }
}
