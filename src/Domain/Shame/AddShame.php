<?php

namespace App\Domain\Shame;

use App\Action\AddShamePayload;
use App\Domain\Entity\Shame;
use Doctrine\ORM\EntityManagerInterface;

class AddShame
{
    public function __construct(private readonly EntityManagerInterface $entityManager) {
    }

    public function add(AddShamePayload $payload): Shame {
        $shame = new Shame($payload->name, $payload->status);
        $this->entityManager->persist($shame);
        $this->entityManager->flush();
        return $shame;
    }
}
