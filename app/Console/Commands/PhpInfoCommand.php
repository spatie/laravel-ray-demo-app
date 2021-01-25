<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PhpInfoCommand extends Command
{
    protected $signature = 'php-info';

    public function handle()
    {
        ray()->newScreen();

        ray()->phpinfo();

       // ray()->phpinfo('xdebug.enabled', 'default_mimetype');
    }
}
