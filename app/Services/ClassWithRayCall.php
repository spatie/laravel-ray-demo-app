<?php

namespace App\Services;

class ClassWithRayCall
{
    public function __construct()
    {
        ray('called from '.__CLASS__);
    }
}
