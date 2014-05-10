<?php

namespace Card;

use SquareLabs\Card;
use SquareLabs\Card\Victory\Estate;
use SquareLabs\Card\Victory\Duchy;
use SquareLabs\Card\Victory\Province;


class VictoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Card
     */
    private $card;

    protected function setUp()
    {
        parent::setUp();
    }

    public function testEstateCard()
    {
        $this->card = new Estate();

        // type
        $this->assertEquals('ESTATE', $this->card->getType());
        $this->assertEquals(Estate::TYPE, $this->card->getType());
        $this->assertTrue($this->card instanceof Card);
        $this->assertTrue($this->card instanceof Card\Victory);
        $this->assertTrue($this->card instanceof Card\Victory\Estate);

        // cost and value
        $this->assertEquals(1, $this->card->getValue());
        $this->assertEquals(2, $this->card->getCost());

        // name
        $this->assertEquals('Estate', $this->card->getName());
        $this->assertEquals(Card\Victory\Estate::NAME, $this->card->getName());
    }

    public function testDuchyCard()
    {
        $this->card = new Duchy();

        // type
        $this->assertEquals('DUCHY', $this->card->getType());
        $this->assertEquals(Duchy::TYPE, $this->card->getType());
        $this->assertTrue($this->card instanceof Card);
        $this->assertTrue($this->card instanceof Card\Victory);
        $this->assertTrue($this->card instanceof Card\Victory\Duchy);

        // cost and value
        $this->assertEquals(3, $this->card->getValue());
        $this->assertEquals(5, $this->card->getCost());

        // name
        $this->assertEquals('Duchy', $this->card->getName());
        $this->assertEquals(Card\Victory\Duchy::NAME, $this->card->getName());
    }

    public function testProvinceCard()
    {
        $this->card = new Province();

        // type
        $this->assertEquals('PROVINCE', $this->card->getType());
        $this->assertEquals(Province::TYPE, $this->card->getType());
        $this->assertTrue($this->card instanceof Card);
        $this->assertTrue($this->card instanceof Card\Victory);
        $this->assertTrue($this->card instanceof Card\Victory\Province);

        // cost and value
        $this->assertEquals(6, $this->card->getValue());
        $this->assertEquals(8, $this->card->getCost());

        // name
        $this->assertEquals('Province', $this->card->getName());
        $this->assertEquals(Card\Victory\Province::NAME, $this->card->getName());
    }

}
