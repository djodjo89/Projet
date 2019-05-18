<?php

namespace Tests\App\Service;

use App\Service\Personnage;
use PHPUnit\Framework\TestCase;

class PersonnageTest extends TestCase
{
    public function testGetType()
    {
        $perso = new Personnage(15);
        
        $this->assertSame("client.e La fourche", $perso->getType());
        $this->assertTrue($perso->getAge()>=1 && $perso->getAge()<=1000);
        
        $perso2 = new Personnage(10);
        
        $this->assertSame("normal.e", $perso2->getType());
        $this->assertTrue($perso2->getAge()>=0 && $perso2->getAge()<=100);
    }
}

