<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnotherExampleController extends Controller
{
    public function anotherExampleRoute(Request $request) {
        $request = Request::create(
            route('example.route'),
            'POST',
            $request->query->all(),
            $request->cookies->all(),
            $request->files->all(),
            $request->server->all(),
            $request->getContent()
        );
        $response = app()->dispatch($request);
        return $response;
    }
}
