<?php

namespace Tests\App\Controller;

use App\Service\Bienvenue;
use PHPUnit\Framework\TestCase;

class BienvenueTest extends TestCase
{
    public function testGetMessage()
    {
        $nom = "lafourche";
        $bienvenue = new Bienvenue($nom);
        $this->assertSame("Vous êtes bien tombé.e.", $bienvenue->getMessage());
        
        $nom2 = "bidule";
        $bienvenue2 = new Bienvenue($nom2);
        $this->assertSame("hello bidule", $bienvenue2->getMessage());
        
    }
}

