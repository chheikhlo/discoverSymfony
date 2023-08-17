<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestIdController extends AbstractController
{
    #[Route('/test/{id}', name: 'app_test_id')]
    public function index(int $id): Response
    {
        return $this->render('test_id/index.html.twig', [
            'id' => $id,
            'controller_name' => 'TestIdController',
        ]);
    }
}
