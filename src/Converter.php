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
        if($decimal>=100) {
            $quotient = (int)($decimal/100);
            $decimal = $decimal%100;
            for($i=0;$i<$quotient;$i++) {
                $output .= "C";
            }
        }
        if($decimal>=50) {
            $quotient = (int)($decimal/50);
            $decimal = $decimal%50;
            for($i=0;$i<$quotient;$i++) {
                $output .= "L";
            }
        }
        if($decimal>=10) {
            $quotient = (int)($decimal/10);
            $decimal = $decimal%10;
            for($i=0;$i<$quotient;$i++) {
                $output .= "X";
            }
        }
        if($decimal>=5) {
            $quotient = (int)($decimal/5);
            $decimal = $decimal%5;
            for($i=0;$i<$quotient;$i++) {
                $output .= "V";
            }
        }
        if($decimal>=1) {
            $quotient = (int)($decimal/1);
            $decimal = $decimal%1;
            for($i=0;$i<$quotient;$i++) {
                $output .= "I";
            }
        }
        return $output;
    }
}