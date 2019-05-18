<?php
// src/Service/Aleatoire.php
namespace App\Service;

$GLOBALS["noms"] = ["Mathilde", "Yanis", "Nael", "Chrystelle"] ;

class Aleatoire
{
    public static function nomRandom()
    {
        return $GLOBALS["noms"][array_rand($GLOBALS["noms"])];
    }
    public static function entierRandom($min,$max)
    {
        return rand($min,$max);
    }
    public static function getNoms()
    {
        return $GLOBALS["noms"];
    }
}