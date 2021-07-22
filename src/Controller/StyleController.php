<?php

namespace App\Controller;

use App\Entity\Style;
use App\Repository\ActorRepository;
use App\Repository\StyleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/styles", name="style_")
 */
class StyleController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(StyleRepository $styleRepository): Response
    {
        $styles = $styleRepository->findAll();
        return $this->render('style/index.html.twig', [
            'styles' => $styles,
        ]);
    }

    /** @Route ("/{styleName}", name="show")
     * @param string $styleName
     * @return Response
     */
    public function show(string $styleName): Response
    {
        $style = $this->getDoctrine()
            ->getRepository(Style::class)
            ->findOneBy(['name' => $styleName]);

        /*if (!$category) {
            throw $this->createNotFoundException(
                'No category with name : '.$categoryName.' found in category\'s table.'
            );
        }*/

        return $this->render('style/show.html.twig', [
            'style' => $style,
        ]);
    }
}
