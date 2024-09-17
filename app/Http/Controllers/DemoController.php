<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    function DemoFunction(Request $request){

        $name = $request->name;

        return "My Name is ".  $name;
    }
}
