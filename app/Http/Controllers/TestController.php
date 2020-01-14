<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    private function testTest()
    {
    }

    public function index(Request $request)
    {
        print_r($request->all());
        return view("welcome");
    }
}
