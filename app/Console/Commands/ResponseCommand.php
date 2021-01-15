<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Testing\TestResponse;

class ResponseCommand extends Command
{
    protected $signature = 'response';

    public function handle()
    {
        $response = response()->json(['a' => 1]);

        $testResponse = new TestResponse($response);

        ray()->testResponse($testResponse);
    }
}
