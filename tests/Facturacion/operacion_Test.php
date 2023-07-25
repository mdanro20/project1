<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include "./src/operacion.php";
class operacion_Test extends TestCase
{
    //  protected function setUp(): void
    //{
    //  echo 'Antes de la prueba setup' ;
    //}
    //protected function tearDown():void{
    //  echo 'Despues de la prueba setup' ;  
    //}
    public static function setUpBeforeClass(): void
    {
        echo 'Antes de ejectuar';
    }
    public static function tearDownAfterClass(): void
    {
        echo 'Despues de ejecutar';
    }
    public function testFactorial(): void
    {
        $objOpr = new operacion();
        $nFct = $objOpr->factorial(50);
        $this->assertIsNumeric($nFct);
        $this->assertEquals($nFct, 50);
    }
    public function testuno(): void
    {
        $this->assertTrue(true);
    }
    public function testdos(): void
    {
        $this->assertTrue(true);
    }
}
