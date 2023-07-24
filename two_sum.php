<?php
class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {
        $Indices = [];
        $count = 0;
        $count2 = 0;
    
        foreach ($nums as $num) {
            $count2 = 0;
            foreach ($nums as $num2) {
                if ($num + $num2 === $target && $count2 > $count) {
                    $Indices = [$count, $count2];
                }
                $count2++;
            }
            $count++;
        }
    
        return $Indices;
    }
}

?>