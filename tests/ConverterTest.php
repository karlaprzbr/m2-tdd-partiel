<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ConverterTest extends TestCase
{
    public function testDecimalToRoman(): void
    {
        $this->assertSame("M", Converter::decimalToRoman(1000));
        $this->assertSame("CM", Converter::decimalToRoman(900));
        $this->assertSame("D", Converter::decimalToRoman(500));
        $this->assertSame("CD", Converter::decimalToRoman(400));
        $this->assertSame("C", Converter::decimalToRoman(100));
        $this->assertSame("XC", Converter::decimalToRoman(90));
        $this->assertSame("L", Converter::decimalToRoman(50));
        $this->assertSame("XL", Converter::decimalToRoman(40));
        $this->assertSame("X", Converter::decimalToRoman(10));
        $this->assertSame("IX", Converter::decimalToRoman(9));
        $this->assertSame("V", Converter::decimalToRoman(5));
        $this->assertSame("IV", Converter::decimalToRoman(4));
        $this->assertSame("I", Converter::decimalToRoman(1));
        $this->assertSame("MMM", Converter::decimalToRoman(3000));
        $this->assertSame("MD", Converter::decimalToRoman(1500));
        $this->assertSame("MDC", Converter::decimalToRoman(1600));
        $this->assertSame("MDCL", Converter::decimalToRoman(1650));
        $this->assertSame("MDCLX", Converter::decimalToRoman(1660));
        $this->assertSame("MDCLXV", Converter::decimalToRoman(1665));
        $this->assertSame("MDCLXVI", Converter::decimalToRoman(1666));
    }
}