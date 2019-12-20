<?php

namespace App\Controller;

use App\Form\SearchFormType;
use App\Repository\AnnonceRepository;
use App\Repository\CategorieRepository;
use App\Repository\MembreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(AnnonceRepository $annonceRepository, CategorieRepository $categorieRepository, MembreRepository $membreRepository)
    {
        $form = $this->createForm(SearchFormType::class, null, compact("categorieRepository", "membreRepository"));

        $annonces = $annonceRepository->findAll();
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'Accueil',
            'search_form' => $form->createView(null),
            'annonces' => $annonces,
        ]);
    }
}
