<?php

class ExampleTest extends TestCase
{
    public function testExample()
    {
        /** @var \Laravel\Lumen\Testing\Concerns\MakesHttpRequests $request */
        $request = $this->post(route('another.example.route'));

        // This works if you ask the URL using Postman, but the unit testing engine fails to dispatch
        // the Request::create object correctly. Methods like fullUrl() returns the url
        // of which application was booted for the first time instead of the dispatched request's URL.
        $this->assertEquals("http://localhost/exampleRoute", $request->response->getContent());
    }
}
