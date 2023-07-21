<?php
class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {
        $indices = [];

        $count = 0;

        foreach ($nums as $num) {
            $count2 = 0;
            foreach ($num as $num2) {
            if ($num + $num2 === $target) {
                return [$count, $count2]; 
            }
            $count2++;
            }
            $count++;
        }
    }
}

?>