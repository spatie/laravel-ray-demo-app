<?php

namespace App\Console\Commands;

use Carbon\CarbonImmutable;
use Illuminate\Console\Command;

class RateLimiterCommand extends Command
{
    protected $signature = 'rate-limiter';

    public function handle(): void
    {
        ray()->rateLimiter()->max(1);

        ray('This should be visible');
        ray('This shouldn\'t be visible');

        ray()->rateLimiter()->clear();

        ray('This should be visible again!');


        ray()->rateLimiter()->perSecond(1);

        ray((new CarbonImmutable())->toDateTimeString('microseconds'));

        ray('I shouldn\'t be visible');

        sleep(1);

        ray('I shouldn\'t be visible');

        sleep(1);

        ray((new CarbonImmutable())->toDateTimeString('microseconds'));

        ray()->rateLimiter()->clear();
    }
}
