<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ConverterTest extends TestCase
{
    public function testDecimalToRoman(): void
    {
        // $this->assertSame("I", Converter::decimalToRoman(1));
        // $this->assertSame("IV", Converter::decimalToRoman(4));
        // $this->assertSame("IX", Converter::decimalToRoman(9));
        // $this->assertSame("L", Converter::decimalToRoman(50));
        // $this->assertSame("C", Converter::decimalToRoman(100));
        // $this->assertSame("D", Converter::decimalToRoman(500));
        $this->assertSame("M", Converter::decimalToRoman(1000));
    }
}