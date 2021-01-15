<?php

namespace App\Events;

class TestEventWithParameter
{
    protected string $eventParameter;

    public function __construct(string $eventParameter)
    {
        $this->eventParameter = $eventParameter;
    }
}
