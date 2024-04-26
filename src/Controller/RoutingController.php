<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class RoutingController extends AbstractController
{
    #[Route(
        '/{reactRouting}',
        name: 'home',
        requirements: ['reactRouting' => "^(?!api\/|api\\|login$|logout$|welcome$).+"],
        defaults: ["reactRouting" => null],
        methods: ['GET']
    )]
    public function homepage(): Response
    {
        return $this->render('base.html.twig');
    }
}
