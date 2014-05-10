<?php

namespace Card\Treasure;

use SquareLabs\Card;
use SquareLabs\Card\Treasure\Copper;
use SquareLabs\Card\Treasure\Silver;
use SquareLabs\Card\Treasure\Gold;


class TreasureTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Card
     */
    private $card;

    protected function setUp()
    {
        parent::setUp();
    }

    public function testCopperCard()
    {
        $this->card = new Copper();

        // type
        $this->assertEquals('COPPER', $this->card->getType());
        $this->assertEquals(Copper::TYPE, $this->card->getType());
        $this->assertTrue($this->card instanceof Card);
        $this->assertTrue($this->card instanceof Card\Treasure);
        $this->assertTrue($this->card instanceof Card\Treasure\Copper);

        // cost and value
        $this->assertEquals(1, $this->card->getValue());
        $this->assertEquals(0, $this->card->getCost());

        // name
        $this->assertEquals('Copper', $this->card->getName());
        $this->assertEquals(Card\Treasure\Copper::NAME, $this->card->getName());
    }

    public function testSilverCard()
    {
        $this->card = new Silver();

        // type
        $this->assertEquals('SILVER', $this->card->getType());
        $this->assertEquals(Silver::TYPE, $this->card->getType());
        $this->assertTrue($this->card instanceof Card);
        $this->assertTrue($this->card instanceof Card\Treasure);
        $this->assertTrue($this->card instanceof Card\Treasure\Silver);

        // cost and value
        $this->assertEquals(2, $this->card->getValue());
        $this->assertEquals(3, $this->card->getCost());

        // name
        $this->assertEquals('Silver', $this->card->getName());
        $this->assertEquals(Card\Treasure\Silver::NAME, $this->card->getName());
    }

    public function testGoldCard()
    {
        $this->card = new Gold();

        // type
        $this->assertEquals('GOLD', $this->card->getType());
        $this->assertEquals(Gold::TYPE, $this->card->getType());
        $this->assertTrue($this->card instanceof Card);
        $this->assertTrue($this->card instanceof Card\Treasure);
        $this->assertTrue($this->card instanceof Card\Treasure\Gold);

        // cost and value
        $this->assertEquals(3, $this->card->getValue());
        $this->assertEquals(6, $this->card->getCost());

        // name
        $this->assertEquals('Gold', $this->card->getName());
        $this->assertEquals(Card\Treasure\Gold::NAME, $this->card->getName());
    }

}
