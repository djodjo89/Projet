<?php
// src/Service/Aleatoire.php
namespace App\Service;

$GLOBALS["prenoms"] = ["Mathilde", "Yanis", "Nael", "Chrystelle"] ;

class Aleatoire
{
    /**
     * Service Aléatoire
     *
     * Définit des fonctions permettant d'obtenir des entiers ainsi
     * que des prénoms tirés au hasard.
     *
     * @access  public
     * @author  Mathys
     * @version 1.0
     */
    /**
     * @return string Prénom choisi au hasard dans une liste
     */
    public static function nomRandom()
    {
        return $GLOBALS["prenoms"][array_rand($GLOBALS["prenoms"])];
    }
    /**
     * @return int Entier choisi au hasard entre min et max inclus
     */
    public static function entierRandom($min,$max)
    {
        return rand($min,$max);
    }
    /**
     * @return array Tableau de string (prénoms)
     */
    public static function getNoms()
    {
        return $GLOBALS["prenoms"];
    }
}