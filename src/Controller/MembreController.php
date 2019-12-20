<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Routing\Annotation\Route;

class MembreController extends AbstractController
{
    /**
     * @Route("/membre", name="membre")
     */
    public function index()
    {
        // Création d'un formulaire
        return $this->render('membre/index.html.twig', [
            'controller_name' => 'Membre',

        ]);
    }
}
