<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class QueryExceptionCommand extends Command
{
    protected $signature = 'query-exception';

    public function handle()
    {
        ray()->newScreen('Test query exception');

        DB::table('unknown table')->get();
    }
}
