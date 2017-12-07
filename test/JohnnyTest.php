<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 07/12/17
 * Time: 10:01
 */

namespace Wcs;


use PHPUnit\Framework\TestCase;

class JohnnyTest extends TestCase
{
    public function testJohnny()
    {
        $stringOrder = new Hallyday();
        $this->assertEquals('ccoouu',$stringOrder->orderReplace('coucou'));

    }
    public function testAnagram()
    {
        $anagram = new Hallyday();
        $this->assertEquals([['chien','niche']],$anagram->anagramCreation('le chien est dans la niche'));
    }

}