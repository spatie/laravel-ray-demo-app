<?php

namespace App\Http\Controllers;

class TestController
{
    public function __invoke()
    {
        return view(
            'test', ['myVariable' => 'myValue']
        );
    }
}
