<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\Personnage;
use App\Service\Bienvenue;

// Les noms

class Accueil extends AbstractController
{    
    /**
     * Page d'accueil
     * 
     * @Route("/hello/{nom}", name="bienvenue")
     */
    public function bienvenue(string $nom = "tuafedparmon")
    {
        $bienvenue = new Bienvenue($nom);
        return new JsonResponse(["message" => $bienvenue->getMessage()]);
    }
    /*
     * Page de description du visiteur
     * 
     * @Route("/character/{id}", name="character")
     */
    public function character(int $id)
    {
        $perso = new Personnage($id);
        return new JsonResponse([
            "name" => $perso->getPrenom(),
            "age" => $perso->getAge(),
            "type" => $perso->getType(),
        ]);
    }
}

