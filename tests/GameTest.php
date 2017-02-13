<?php

    require_once "src/Game.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {

        function test_count_to_two()
        {
            //Arrange
            $test_Game = new Game;
            $input = 2;

            //Act
            $result = $test_Game->countTo($input);

            //Assert
            $this->assertEquals([1,2], $result);
        }
    }


 ?>
