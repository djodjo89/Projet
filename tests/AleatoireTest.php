<?php
namespace tests;

use App\Service\Aleatoire;
use PHPUnit\Framework\TestCase;

class AleatoireTest extends TestCase
{
    public function testNomRandom()
    {
        $this->assertTrue(in_array("Mathilde",Aleatoire::getNoms()));
    }
    public function testEntierRandom()
    {
        $nb = Aleatoire::entierRandom(0, 100);
        $this->assertTrue($nb >= 0 && $nb <= 100);
        
        $nb2 = Aleatoire::entierRandom(1, 1000);
        $this->assertTrue($nb2 >= 0 && $nb2 <= 1000);
    }
}

