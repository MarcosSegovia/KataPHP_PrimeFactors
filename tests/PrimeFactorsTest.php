<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 1/8/15
 * Time: 16:50
 */

require_once dirname('__ROOT__') . '/src/PrimeFactors.php';

class PrimeFactorsTest extends PHPUnit_Framework_TestCase
{

    function testFailTest()
    {
        $this->assertEquals(false, false);
    }

    function testExceptionNumberNotPositiveInteger()
    {
        $this->setExpectedException('InvalidArgumentException');
        PrimeFactors::generate(-1);
    }

    function testNumberIsAlreadyPrime()
    {
        $this->assertEquals( array(2), PrimeFactors::generate(2));
    }

    function testNumberIsShortAndNotPrime()
    {
        $this->assertEquals(array(2,2,2), PrimeFactors::generate(8));
    }

    function testNumberIsBigAndPrime()
    {
        $this->assertEquals(array(17), PrimeFactors::generate(17));
    }

    function testNumberIsBigAndNotPrime()
    {
        $this->assertEquals(array(2,13), PrimeFactors::generate(26));
    }

    function testNumberIsExtremelyBigAndNotPrime()
    {
        $this->assertEquals(array(2,5,5,7), PrimeFactors::generate(350));
    }



} 