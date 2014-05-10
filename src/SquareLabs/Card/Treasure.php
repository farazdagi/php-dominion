<?php

namespace SquareLabs\Card;

use SquareLabs\Card;

/**
 * Base Treasure card (used to abstract common functionality of copper, silver, and gold cards)
 * @package SquareLabs\Card
 */
abstract class Treasure extends Card
{
    const TYPE_COPPER = 'COPPER';
    const TYPE_SILVER = 'SILVER';
    const TYPE_GOLD = 'GOLD';
}