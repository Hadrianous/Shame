<?php

declare(strict_types=1);

namespace App\Action;

use App\Domain\Shame\AddShame;
use App\Domain\Shame\Input\AddShameInput;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
#[Route('/shame', methods: ["POST"])]
class AddShameAction
{
    public function __invoke(
        AddShame $handler,
        #[MapRequestPayload] AddShameInput $shamePayload
    ): JsonResponse {
        return new JsonResponse($handler->add($shamePayload), 201);
    }
}
