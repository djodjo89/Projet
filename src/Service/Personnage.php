<?php
// src/Service/Personnage.php
namespace App\Service;

class Personnage
{
    private $_id;
    private $_prenom;
    private $_age;
    private $_type;
    /**
     * Service Personnage
     *
     * Définit le type de prénom et l'âge de l'utilisateur dont l'id
     * est entré en paramètre selon qu'il est pair ou impair
     *
     * @param   int  $id Le prénom de l'utilisateur
     * @access  public
     * @author  Mathys
     * @version 1.0
     * @see Aleatoire
     */
    public function __construct($id)
    {
        $this->_id = $id;
        $this->_prenom = Aleatoire::nomRandom();
        if ($id%2==0)
        {
            $this->_age = Aleatoire::entierRandom(0, 100);
            $this->_type = "normal.e";
        }
        else
        {
            $this->_age = Aleatoire::entierRandom(1, 1000);
            $this->_type = "client.e La fourche";
        }
    }
    public function getId()
    {
        return $this->_id;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function getType()
    {
        return $this->_type;
    }
}

