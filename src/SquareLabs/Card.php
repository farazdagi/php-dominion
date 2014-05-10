<?php

namespace SquareLabs;


/**
 * Base Card class
 * @package SquareLabs
 */
abstract class Card
{
    /**
     * Returns card's type
     *
     * @return string
     */
    public function getType()
    {
        return static::TYPE;
    }

    /**
     * Card name
     * @return string
     */
    public function getName()
    {
        return static::NAME;
    }

    /**
     * Card's value in coins
     * @return int
     */
    public function getValue()
    {
        return static::VALUE;
    }

    /**
     * Card's cost in coins
     * @return int
     */
    public function getCost()
    {
        return static::COST;
    }
}