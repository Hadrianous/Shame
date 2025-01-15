<?php

declare(strict_types=1);

namespace App\Domain\Shame;

use App\Domain\Entity\Shame;
use App\Domain\Shame\Input\AddShameInput;
use App\Domain\Shame\Output\AddShameOutput;
use Doctrine\ORM\EntityManagerInterface;

class AddShame
{
    public function __construct(private readonly EntityManagerInterface $entityManager) {
    }

    public function add(AddShameInput $payload): AddShameOutput {
        $shame = new Shame($payload->name, $payload->status);
        $this->entityManager->persist($shame);
        $this->entityManager->flush();
        return new AddShameOutput($shame);
    }
}
