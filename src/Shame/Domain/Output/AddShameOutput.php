<?php

declare(strict_types=1);

namespace App\Shame\Domain\Output;

use App\Shame\Domain\Entity\Shame;
use App\Shame\Domain\Entity\Status;

final class AddShameOutput
{
    public readonly Status $status;
    public readonly string $name;

    public function __construct(Shame $shame,) {
        $this->name = $shame->getName();
        $this->status = $shame->getStatus();
    }
}
