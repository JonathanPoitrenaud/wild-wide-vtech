<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    /**
     * @Route("/Program/", "name=program_index")
     */
    public function index(): Response
    {
        return new Response(
            '<!doctype html><html lang="en"><title>Wild Wide Vtech</title><body>Wild Wide Vtech Index</body></html>'
        );
    }
}