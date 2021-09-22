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
            if($decimal<900) {
                $quotient = (int)($decimal/500);
                $decimal = $decimal%500;
                for($i=0;$i<$quotient;$i++) {
                    $output .= "D";
                }
            } else {
                $decimal = $decimal%100;
                $output .= "CM";
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
            if($decimal<90) {
                $quotient = (int)($decimal/50);
                $decimal = $decimal%50;
                for($i=0;$i<$quotient;$i++) {
                    $output .= "L";
                }
            } else {
                $decimal = $decimal%10;
                $output .= "XC";
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
            if($decimal<9) {
                $quotient = (int)($decimal/5);
                $decimal = $decimal%5;
                for($i=0;$i<$quotient;$i++) {
                    $output .= "V";
                }
            } else {
                $decimal = $decimal%1;
                $output .= "IX";
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