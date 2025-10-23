<?php

declare(strict_types=1);

namespace App\Shame\Domain;

use App\Shame\Domain\Entity\Shame;
use App\Shame\Domain\Input\AddShameInput;
use App\Shame\Domain\Output\AddShameOutput;
use App\Shame\Domain\Repository\ShameRepositoryInterface;

class AddShame
{
    public function __construct(private readonly ShameRepositoryInterface $repository) {
    }

    public function add(AddShameInput $payload): AddShameOutput {
        $shame = new Shame($payload->name, $payload->status);
        $this->repository->save($shame);
        return new AddShameOutput($shame);
    }
}
