<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function exampleRoute(Request $request) {
        return response()->json($request->fullUrl());
    }
}
