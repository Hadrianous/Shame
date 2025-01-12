<?php

namespace App\Action;

class AddShamePayload
{
    public function __construct(public readonly string $name, public readonly string $status)
    {
    }
}