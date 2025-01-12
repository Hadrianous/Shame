<?php

declare(strict_types=1);

namespace App\Action;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListShameController extends AbstractController
{
    #[Route('/list-shame')]
    public function index(): Response
    {
        return $this->render('Shame/shame.html.twig');
    }
}
