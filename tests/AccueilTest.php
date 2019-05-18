<?php

namespace Tests\App\Controller;

use App\Controller\Accueil;
use PHPUnit\Framework\TestCase;

class AccueilTest extends TestCase
{
    public function testBienvenue()
    {
        $controller = new Accueil();
        $param = [];
        if ($content = $controller->bienvenue("lafourche")->getContent()) {
            $param = json_decode($content, true);
        }        
        $this->assertSame("Vous êtes bien tombé.e.", $param['message']);
        
        /*if ($content = $controller->bienvenue("tuafedparmon")->getContent()) {
            $param = json_decode($content, true);
        }        
        $this->assertSame("Hello inconnu.e, nous avons décidé de vous appeler Yanis", $param['message']);*/
        
        $nom = "bidule";
        if ($content = $controller->bienvenue($nom)->getContent()) {
            $param = json_decode($content, true);
        }
        $this->assertSame("hello bidule", $param['message']); 
        
    }
}

