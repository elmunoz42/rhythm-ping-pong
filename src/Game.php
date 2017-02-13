<?php

    class Game
    {
        public $count;
        // public $tempo:

        function countTo($input_number)
        {
            $results_arr=array();
            for ($index=1; $index<=$input_number; $index++) {
                array_push($results_arr, $index);
            }
            return $results_arr;
        }
    }



 ?>
