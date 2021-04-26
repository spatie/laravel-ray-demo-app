<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class JsonCommand extends Command
{
    protected $signature = 'json';

    public function handle()
    {
        ray()->newScreen('Json test');

        ray()->toJson(['a' => 1, 'b' => ['c' => 3]]);

        $jsonString = json_encode(['a' => 1, 'b' => ['c' => 3]]);

        ray()->json($jsonString);
    }
}
