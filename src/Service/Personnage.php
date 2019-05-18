<?php
// src/Service/Personnage.php
namespace App\Service;

class Personnage
{
    private $_prenom;
    private $_age;
    private $_type;
    public function __construct($id)
    {
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

