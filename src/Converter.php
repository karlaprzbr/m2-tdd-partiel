<?php

class Converter
{
    public function decimalToRoman(int $decimal) {
        $output = "";
        if($decimal>=1000) {
            $quotient = $decimal/1000;
            $remainder = $decimal%1000;
            for($i=0;$i<$quotient;$i++) {
                $output .= "M";
                return $output;
            }
        }
    }
}