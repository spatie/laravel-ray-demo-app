<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ApplicationLogCommand extends Command
{
    protected $signature = 'application-log';

    public function handle()
    {
        Log::info('Primitive context', ['string' => 'Hello world!', 'number' => 3.1415, 'NULL' => null, 'false' => false, 'true' => true]);
        Log::info('Compound context', ['object' => ['a' => 'b', 'c' => 'd'], 'array' => ['a', 'b', 'c', 'd']]);
        Log::info('Single context', ['a' => 'b']);
        Log::info('Empty context', []);
        Log::info('No context');
    }
}
