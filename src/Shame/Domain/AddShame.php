<?php

declare(strict_types=1);

namespace App\Shame\Domain;

use App\Shame\Domain\Entity\Shame;
use App\Shame\Domain\Input\AddShameInput;
use App\Shame\Domain\Output\AddShameOutput;
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
