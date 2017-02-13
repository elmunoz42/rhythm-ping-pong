<?php

    class Game
    {
        public $count;
        // public $tempo:

        function countTo($input_number)
        {
            $results_arr=array();
            for ($index=1; $index<=$input_number; $index++) {
                if ($index % 15 == 0 ) {
                    array_push($results_arr, "Ping-Pong!");
                }
                else if ($index % 5 == 0) {
                    array_push($results_arr, "Pong!");
                }
                else if ($index % 3 == 0) {
                    array_push($results_arr, "Ping!");
                }
                else {
                    array_push($results_arr, $index);
                }
            }
            return $results_arr;
        }
    }



 ?>
