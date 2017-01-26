<?php
use PHPUnit\Framework\TestCase;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class RomanNumeralsTest extends TestCase
{
    public function testConversion()
    {
        $example_table = array(
            "I" => 1,
            "II" => 2,
            "IV" => 4,
            "XIV" => 14,
            "X" => 10,
            "XX" => 20,
            "XLII" => 42,
            "CCVIII" => 208,
            "MCMLXXXI" => 1981
        );

        foreach ($example_table as $key => $value) {
            $this->assertEquals(RomanNumerals::convert($key), $value);
        }
    }
}
?>
