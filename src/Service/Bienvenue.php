<?php
// src/Service/Bienvenue.php
namespace App\Service;

class Bienvenue
{
    private $_message;
    /**
     * Service Bienvenue
     * 
     * Définit le message à retourner en fonction du prénom entré en paramètre
     * 
     * @param   string  $prenom Le prénom de l'utilisateur
     * @access  public
     * @author  Mathys
     * @version 1.0
     * @see Aleatoire
     */
    public function __construct($prenom)
    {
        switch ($prenom)
        {
            case "lafourche":
                $this->_message = 'Vous êtes bien tombé.e.';
                break;
                
            case "tuafedparmon":
                $this->_message = 'Hello inconnu.e, nous avons décidé de vous appeler '.Aleatoire::nomRandom();
                break;
                
            default:
                $this->_message = 'hello '.$prenom;
            break;
        }
    }
    public function getMessage()
    {
        return $this->_message;
    }
}