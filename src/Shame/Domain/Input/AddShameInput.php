<?php

declare(strict_types=1);

namespace App\Shame\Domain\Input;

use App\Shame\Domain\Entity\Status;
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
