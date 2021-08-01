<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class QueryBuilderCommand extends Command
{
    protected $signature = 'query-builder';

    public function handle()
    {
        ray()->newScreen('Query builder');

        User::query()
            ->where('email', 'john@example.com')
            ->ray()
            ->first();

        User::query()
            ->where('first_name', 'John')
            ->ray()
            ->where('last_name', 'Doe')
            ->ray();
    }
}
