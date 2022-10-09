<?php
    echo B::sum(1, 0);
    echo B::sum_abs(1, 0);
    class B
    {
        public static function abs($a)
        {
            return $a < 0 ? -1 * $a : $a;
        }
        public static function sum($a, $b)
        {
            return $a + $b;
        }
        public static function sum_abs($a, $b)
        {
            return self::abs($a) + self::abs($b);
        }
        public static function or($a, $b)
        {
                return $a or $b;
        }
        public static function and($a, $b)
        {
            return $a && $b;
        }
        public static function xor($a,$b)
        {
            return $a xor $b;
        }
        public static function not($a,$b)
        {
            if ($a != $b){
                return $a;
            }else{
                return $b;
            }

        }
    }
?>