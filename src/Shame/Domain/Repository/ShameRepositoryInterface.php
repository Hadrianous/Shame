<?php

namespace App\Shame\Domain\Repository;

use App\Shame\Domain\Entity\Shame;

interface ShameRepositoryInterface
{
    public function save(Shame $shame);
}