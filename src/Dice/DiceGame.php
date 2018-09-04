<?php
namespace Vihd14\Dice;

/**
* Class for dice game 100.
*/

class DiceGame
{
    /**
    * @var string $player - name of the player.
    * @var int $playerPoints - total points for $player.
    * @var $playerDices - dice or dices to be thrown by $player.
    */
    private $dice;
    private $rounds;
    private $playerPoints;
    private $playerTurnPoints;
    private $computerPoints;
    private $computerTurnPoints;
    private $numberOfDices;


    /**
    * Constructor for dice game 100.
    *
    * @var string $player - name of the player.
    * @var int $nrOfDices - number of dices to be thrown, defaults to 1.
    */
    public function __construct()
    {
        $this->playerPoints = array();
        $this->playerTurnPoints = array();
        $this->computerPoints = array();
        $this->computerTurnPoints = array();
        $this->numberOfDices = 2;
        $this->dice = new Dice();
    }


    /**
    * Roll computers' dices.
    *
    */
    public function computerRoll()
    {
        $this->computerPoints = array();
        $rounds = rand(1, 4);
        $computerRoll = $rounds * $this->numberOfDices;

        for ($i = 0; $i < $computerRoll; $i++) {
            $roll = $this->dice->roll();
            echo $roll, " ";
            array_push($this->computerPoints, $roll);
        }

        if (in_array(1, $this->computerPoints)) {
            $this->computerTurnPoints = array();
        } else {
            $this->computerTurnPoints = $this->computerPoints;
        }
    }


    /**
    * Roll players' dices.
    *
    */
    public function playerRoll()
    {
        $this->playerPoints = array();

        for ($i = 0; $i < $this->numberOfDices; $i++) {
            $roll = $this->dice->roll();
            echo $roll, " ";
            array_push($this->playerPoints, $roll);
        }

        if (in_array(1, $this->playerPoints)) {
            $this->playerTurnPoints = array();
        } else {
            $this->playerTurnPoints = $this->playerPoints;
        }
    }


    /**
    * Return computers' turn score.
    *
    * @return $computerTurnPoints.
    */
    public function getComputerPoints()
    {
        return $this->computerTurnPoints;
    }


    /**
    * Return players' turn score.
    *
    * @return $playerTurnPoints.
    */
    public function getPlayerPoints()
    {
        return $this->playerTurnPoints;
    }
}
