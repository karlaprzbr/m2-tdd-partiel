<?php

class Converter
{
    public function decimalToRoman(int $decimal) {
        $output = "";
        if($decimal>=1000) {
            $quotient = (int)($decimal/1000);
            $decimal = $decimal%1000;
            for($i=0;$i<$quotient;$i++) {
                $output .= "M";
            }
        }
        if($decimal>=500) {
            $quotient = (int)($decimal/500);
            $decimal = $decimal%500;
            for($i=0;$i<$quotient;$i++) {
                $output .= "D";
            }
        }
        return $output;
    }
}