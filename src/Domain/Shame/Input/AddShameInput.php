<?php

namespace App\Domain\Shame\Input;

use App\Domain\Entity\Status;
use Symfony\Component\Validator\Constraints as Assert;

final class AddShameInput
{
    public function __construct(
        #[Assert\NotBlank()]
        public readonly string $name,
        #[Assert\NotBlank()]
        public readonly Status $status
    ){
    }
}
