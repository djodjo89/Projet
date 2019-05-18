<?php

namespace Tests\App\Service;

use App\Service\Personnage;
use PHPUnit\Framework\TestCase;

class PersonnageTest extends TestCase
{
    public function testGetId()
    {
        $perso = new Personnage(15);
        $this->assertSame(15, $perso->getId());
        
        $perso2 = new Personnage(10);
        $this->assertSame(10, $perso2->getId());
    }
    public function testGetType()
    {
        $perso = new Personnage(15);        
        $this->assertSame("client.e La fourche", $perso->getType());
                
        $perso2 = new Personnage(10);        
        $this->assertSame("normal.e", $perso2->getType());
    }
    public function testGetAge()
    {
        $perso = new Personnage(15);
        $this->assertTrue($perso->getAge()>=1 && $perso->getAge()<=1000);
        
        $perso2 = new Personnage(10);
        $this->assertTrue($perso2->getAge()>=0 && $perso2->getAge()<=100);
    }
}

