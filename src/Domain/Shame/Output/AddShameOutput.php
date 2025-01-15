<?php

namespace App\Domain\Shame\Output;

use App\Domain\Entity\Shame;
use App\Domain\Entity\Status;

final class AddShameOutput
{
    public readonly Status $status;
    public readonly string $name;

    public function __construct(Shame $shame,) {
        $this->name = $shame->getName();
        $this->status = $shame->getStatus();
    }
}
