<?php

use PHPUnit\Framework\TestCase;
use PhpProjectExample\Car;

class CarTest extends TestCase {
    public function testConstructor() {
        $fiat = new Car('Fiat', '500');
        $this->assertInstanceOf(Car::class, $fiat);
    }

    public function testStartEngine() {
        $fiat = new Car('Fiat', '500');
        $fiat->startEngine();
        $this->assertTrue(true, $fiat->isStarted());
    }

    public function testToString() {
        $fiat = new Car('Fiat', '500');
        $this->assertEquals('Fiat 500', (string) $fiat);
    }
}