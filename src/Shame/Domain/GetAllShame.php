<?php

namespace App\Shame\Domain;

use App\Shame\Domain\Entity\Shame;
use Doctrine\ORM\EntityManagerInterface;

class GetAllShame
{
    public function __construct(private readonly EntityManagerInterface $entityManager){
    }

    public function execute(): array
    {
        return $this->entityManager->getRepository(Shame::class)->findAll();
    }
}