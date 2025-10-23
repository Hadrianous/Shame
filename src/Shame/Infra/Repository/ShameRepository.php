<?php

namespace App\Shame\Infra\Repository;

use App\Shame\Domain\Entity\Shame;
use App\Shame\Domain\Repository\ShameRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class ShameRepository implements ShameRepositoryInterface
{
    public function __construct(private readonly EntityManagerInterface $entityManager) {
    }

    public function save(Shame $shame) {
        $this->entityManager->persist($shame);
        $this->entityManager->flush();
    }
}