<?php
// src/Controller/PersoControleur.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\Personnage;

// Les noms

class PersoControleur extends AbstractController
{
    /**
     * Page de description du visiteur
     *
     * Définit si l'utilisateur est un client la Fourche ou non
     * en fonction de son identifiant et retourne un JSON.
     * Si l'identifiant est pair, l'utilisateur est normal.e et son
     * âge est choisi aléatoirement entre 1 et 100 ans, sinon
     * il est client.e la Fourche et a son âge est choisi aléatoirement
     * entre 1 et 1000 ans.
     *
     * @Route("/character/{id}", name="character")
     * @param   int  $id L'id de l'utilisateur
     * @return  JsonResponse    L'affichage du message au format JsonArrayType
     * @access  public
     * @author  Mathys
     * @version 1.0
     * @see Personnage
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

