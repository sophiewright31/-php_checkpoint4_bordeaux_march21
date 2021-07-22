<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Type;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Slugify;
/**
 * @Route("/types", name="type_")
 */
class TypeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $types = $this->getDoctrine()
            ->getRepository(Type::class)
            ->findAll();
        return $this->render(
            'type/index.html.twig',
            ['types' => $types]
        );
    }
    /**
     * @Route("/{slug}", name="show")
     * @ParamConverter("type", class="App\Entity\Type", options={"mapping": {"slug": "slug"}})
     */
    public function show(Type $type): Response
    {

        if (!$type) {
            throw $this->createNotFoundException(
                'No type with id : '.$type->getId().' found in type\'s table.'
            );
        }
        return $this->render('type/show.html.twig', [
            'type' => $type,
        ]);
    }

    /**
     * @Route("/{slug}/{article}", name="article_show")
     * @param Type $type
     * @param Article $article
     * @return Response
     */
    public function showArticle(Type $type, Article $article): Response
    {

        return $this->render('type/article_show.html.twig', [
            'type' => $type,
            'article' => $article,
        ]);

    }
}
