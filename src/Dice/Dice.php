<?php
namespace Vihd14\Dice;

/**
 * Dice class.
 */
class Dice
{
    private $value;
    private $lastRoll;

    /**
     * Constructor to initiate the object.
     *
     */
    public function __construct()
    {
        $this->value = $this->roll();
    }

    public function roll()
    {
        $this->lastRoll = rand(1, 6);
        return $this->lastRoll;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getLastRoll()
    {
        return $this->lastRoll;
    }
}
