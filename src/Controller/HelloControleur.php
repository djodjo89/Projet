<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\Bienvenue;
use Doctrine\DBAL\Types\JsonArrayType;


class HelloControleur extends AbstractController
{    
    /**
     * Page d'accueil
     * 
     * Affiche un retour JSON avec "hello {prénom}"
     * Si le prénom est "lafourche", affiche "Vous êtes bien tombé.e."
     * S'il n'y a pas de prénom, affiche "Hello inconnu.e, nous avons décidé de vous apperler
     * {prénom aléatoire}.
     * 
     * @Route("/hello/{prenom}", name="bienvenue")
     * @param   string  $prenom Le prénom de l'utilisateur
     * @return  JsonResponse    L'affichage du message au format JsonResponse
     * @access  public
     * @author  Mathys
     * @version 1.0
     * @see Bienvenue
     */
    public function bienvenue(string $prenom = "tuafedparmon")
    {
        $bienvenue = new Bienvenue($prenom);
        return new JsonResponse(["message" => $bienvenue->getMessage()]);
    }
}

