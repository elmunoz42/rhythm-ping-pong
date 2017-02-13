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
        function test_count_to_three()
        {
            //Arrange
            $test_Game = new Game;
            $input = 3;

            //Act
            $result = $test_Game->countTo($input);

            //Assert
            $this->assertEquals([1,2,"Ping!"], $result);
        }
        function test_count_to_five()
        {
            //Arrange
            $test_Game = new Game;
            $input = 5;

            //Act
            $result = $test_Game->countTo($input);

            //Assert
            $this->assertEquals([1,2,"Ping!",4,"Pong!"], $result);
        }
        function test_count_to_fifteen()
        {
            //Arrange
            $test_Game = new Game;
            $input = 15;

            //Act
            $result = $test_Game->countTo($input);

            //Assert
            $this->assertEquals([1,2,"Ping!",4,"Pong!", "Ping!", 7, 8, "Ping!","Pong!",11,"Ping!",13,14,"Ping-Pong!"], $result);
        }
    }


 ?>
