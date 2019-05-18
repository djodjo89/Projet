<?php
// src/Service/Bienvenue.php
namespace App\Service;

class Bienvenue
{
    private $_message;
    public function __construct($nom)
    {
        switch ($nom)
        {
            case "lafourche":
                $this->_message = 'Vous êtes bien tombé.e.';
                break;
                
            case "tuafedparmon":
                $this->_message = 'Hello inconnu.e, nous avons décidé de vous appeler '.Aleatoire::nomRandom();
                break;
                
            default:
                $this->_message = 'hello '.$nom;
            break;
        }
    }
    public function getMessage()
    {
        return $this->_message;
    }
}