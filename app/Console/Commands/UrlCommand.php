<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class UrlCommand extends Command
{
    protected $signature = 'url';

    public function handle()
    {
        ray()->url('spatie.be', 'Hey ruben');
        ray()->link('spatie.be', 'Hey Alex');

    }
}
