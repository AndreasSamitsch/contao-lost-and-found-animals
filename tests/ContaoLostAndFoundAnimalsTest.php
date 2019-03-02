<?php


namespace Tsz\ContaoLostAndFoundAnimals\Tests;

use Tsz\ContaoLostAndFoundAnimals\ContaoLostAndFoundAnimals;
use PHPUnit\Framework\TestCase;

class ContaoLostAndFoundAnimalsTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoLostAndFoundAnimals();

        $this->assertInstanceOf('Tsz\ContaoLostAndFoundAnimals\ContaoLostAndFoundAnimals', $bundle);
    }
}
