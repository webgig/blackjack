<?php

use BlackJack\Card;

require 'vendor/autoload.php';


class CardTest extends \PHPUnit_Framework_TestCase{


  public function setUp(){ }
  public function tearDown(){ }

  public function testFormValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $c1 = new Card('2H');
    $c2 = new Card('AS');

    $this->assertEquals(13,$c1->getFaceValue()+ $c2->getFaceValue());
  }


}