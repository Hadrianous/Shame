<?php

declare(strict_types=1);

namespace App\Action;

use App\Domain\Shame\AddShame;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/shame', methods: ["POST"])]
class AddShameController extends AbstractController
{
    public function __construct(private readonly AddShame $handler) {
    }

    public function __invoke(#[MapRequestPayload] AddShamePayload $shamePayload): JsonResponse
    {
        $shame = $this->handler->add($shamePayload);
        return new JsonResponse($shame, 201);
    }
}
