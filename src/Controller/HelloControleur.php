<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\Personnage;
use App\Service\Bienvenue;

// Les noms

class HelloControleur extends AbstractController
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
}

