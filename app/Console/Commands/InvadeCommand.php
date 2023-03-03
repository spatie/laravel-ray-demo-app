<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InvadeCommand extends Command
{
    protected $signature = 'invade';

    public function handle()
    {
        $privateClass = new PrivateClass();

        ray()->invade($privateClass)->privateProperty->red();
        ray()->invade($privateClass)->privateMethod()->green();
    }
}

class PrivateClass
{
    private string $privateProperty = 'this is the value of the private property';

    private function privateMethod()
    {
        return 'this is the result of the private method';
    }
}
