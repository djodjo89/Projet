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

