<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s): bool {
        $open = 0;
        $close = 0;
        $lastOpen = '';

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            if ($char === '(' || $char === '{' || $char === '[') {
                $open++;
                $lastOpen = $char;
            } elseif ($char === ')' || $char === '}' || $char === ']') {
                $close++;
                $expectedOpen = '';
                switch ($char) {
                    case ')':
                        $expectedOpen = '(';
                        break;
                    case '}':
                        $expectedOpen = '{';
                        break;
                    case ']':
                        $expectedOpen = '[';
                        break;
                }

                if ($lastOpen !== $expectedOpen) {
                    return false;
                }
            }
        }

        return $open === $close;
    }
}

?>