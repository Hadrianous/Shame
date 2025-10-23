<?php

declare(strict_types=1);

namespace App\Shame\Action;

use App\Shame\Domain\GetAllShame;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
#[Route('/list-shame', methods: ['GET'])]
class ListShameAction
{
    public function __invoke(
        GetAllShame $getAllShame
    ): Response
    {
        $shames = $getAllShame->execute();

        return new JsonResponse($shames, Response::HTTP_OK);
    }
}
