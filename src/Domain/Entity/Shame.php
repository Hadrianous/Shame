<?php

namespace App\Domain\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Shame
{
    #[Id]
    #[GeneratedValue]
    #[Column]
    private int $id;

    #[Column(type: Types::TEXT, nullable: false)]
    private string $name;

    #[Column(nullable: false, enumType: Status::class)]
    private Status $status;

    public function __construct(string $name, Status $status)
    {
        $this->name = $name;
        $this->status = $status;
    }
}
