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
        $ray = ray(
    new Carbon(),
    'string',
    ['a' => 1],
    User::make([
        'email' => 'freek@spatie.be',
    ])
);

        //$ray->remove();

        ray()->newScreen();
        ray(new Carbon());
        ray('string');
        ray(['a' => 1]);
        ray(User::make([
            'email' => 'freek@spatie.be',
        ]));
    }
}
