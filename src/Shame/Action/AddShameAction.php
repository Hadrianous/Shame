<?php

declare(strict_types=1);

namespace App\Shame\Action;

use App\Shame\Domain\AddShame;
use App\Shame\Domain\Input\AddShameInput;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
#[Route('/create-shame', methods: ["POST"])]
class AddShameAction
{
    public function __invoke(
        AddShame $handler,
        #[MapRequestPayload] AddShameInput $shamePayload
    ): JsonResponse {
        return new JsonResponse($handler->add($shamePayload), 201);
    }
}
