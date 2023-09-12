<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;

class ExpandCommand extends Command
{
    protected $signature = 'expand';

    public function handle()
    {
        ray()->clearScreen();

        $array = [
            'parentKey' => [
                'childKey' => 'childValue',
            ],
            'anotherParentKey' => [
                'anotherChildKey' => 'anotherChildValue',
            ]
        ];

        ray($array)->expand('parentKey.childKey');
        ray($array)->expand(2);

        ray(app())->expand('bootingCallbacks', 'afterResolvingCallbacks.view');
    }
}
