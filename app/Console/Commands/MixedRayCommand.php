<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class MixedRayCommand extends Command
{
    protected $signature = 'mixed-ray';

    public function handle()
    {
        ray(
            'string',
            new Carbon(),
            ['a' => 1],
            User::make([
                'email' => 'freek@spatie.be'
            ])
        );
    }
}
