<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categories", name="category_")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();
        return $this->render(
            'category/index.html.twig',
            ['categories' => $categories]
        );
    }

    /** @Route ("/{categoryName}", name="show")
     * @param string $categoryName
     * @return Response
     */
    public function show(string $categoryName): Response
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(['name' => $categoryName]);

        /*if (!$category) {
            throw $this->createNotFoundException(
                'No category with name : '.$categoryName.' found in category\'s table.'
            );
        }*/

        $types = $this->getDoctrine()
            ->getRepository(Type::class)
            ->findBy(['category' => $category], ['id' => 'ASC'],20);

        return $this->render('category/show.html.twig', [
            'category' => $category,
            'types' => $types,
        ]);
    }
}
