<?php

namespace Card\Treasure;

use SquareLabs\Card;
use SquareLabs\Card\Treasure\Copper;


class CopperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Card
     */
    private $card;

    protected function setUp()
    {
        parent::setUp();
        $this->card = new Card\Treasure\Copper();
    }


    public function testType()
    {
        $this->assertEquals('COPPER', $this->card->getType());
        $this->assertEquals(Copper::TYPE, $this->card->getType());
        $this->assertTrue($this->card instanceof Card);
        $this->assertTrue($this->card instanceof Card\Treasure);
        $this->assertTrue($this->card instanceof Card\Treasure\Copper);
    }

    public function testValueAndCost()
    {
        $this->assertEquals(1, $this->card->getValue());
        $this->assertEquals(0, $this->card->getCost());
    }

    public function testName()
    {
        $this->assertEquals('Copper', $this->card->getName());
        $this->assertEquals(Card\Treasure\Copper::NAME, $this->card->getName());
    }

}
