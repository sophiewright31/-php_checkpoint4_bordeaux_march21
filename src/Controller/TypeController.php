<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeController extends AbstractController
{
    /**
     * @Route("/types/", name="type_index")
     */
    public function index(): Response
    {
        return $this->render('type/index.html.twig', [
            'controller_name' => 'TypeController',
        ]);
    }

    /**
     * @Route("/types/list/{page}", requirements={"page"="\d+"}, name="type_list")
     */
    public function list(int $page): Response
    {
        return $this->render('type/list.html.twig', ['page' => $page]);
    }
}
