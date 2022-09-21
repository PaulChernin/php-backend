<?php
    function selectionSort($array) {
        $size = count($array);

        for ($i = 0; $i < $size - 1; $i++) {
            $minIndex = $i;
            
            for ($j = $i + 1; $j < $size; $j++) {
                if ($array[$j] < $array[$minIndex]) {
                    $minIndex = $j;
                }
            }

            $t = $array[$minIndex];
            $array[$minIndex] = $array[$i];
            $array[$i] = $t;
        }

        return $array;
    }
?>