<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 1/8/15
 * Time: 16:50
 */

require_once __DIR__ . '/../vendor/autoload.php';

class PrimeFactors
{

    static function generate($integer = -1)
    {
        $primes = array();
        if($integer <= 1)
        {
            throw new InvalidArgumentException('Argument must be a positive number and greater than 1');
        }

        while(true)
        {
            for($incr=2; $incr<=$integer; $incr++)
            {
                if($integer % $incr == 0)
                {
                    array_push($primes, $incr);
                    $integer = $integer / $incr;
                    if($integer == 1)
                    {
                        return $primes;
                    }
                    else
                    {
                        break;
                    }
                }
            }
        }
    }
} 