<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = "This is an Index in Controller";
        return view('test.index',[
            'data' => $data
        ]);  
    }
}
