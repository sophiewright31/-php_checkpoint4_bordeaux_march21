<?php

namespace App\Controller;

use App\Form\SearchBarType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function test(Request $request): Response
    {
        $httpClient = HttpClient::create();
        $form = $this->createForm(SearchBarType::class);
        $form->handleRequest($request);
        $content = null;
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData()['textTyped'];
            $requestApi = "http://openlibrary.org/search.json?q=" . $data . ',availability&limit=20';
            $response = $httpClient->request('GET', $requestApi);
            $content = $response->toArray();
        }
        return $this->render('home/test.html.twig', [
            'form' => $form->createView(),
            'content' => $content,
        ]);
    }
}
