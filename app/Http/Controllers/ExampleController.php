<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{

    public function __construct()
    {
        $this->middleware('test:1,1')->only('my_data');
    }

    public function my_data()
    {
        return view('my_data');
    }
    public function receive()
    {
        return 'hello shezo';
    }
}