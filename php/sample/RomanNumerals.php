<?php
class RomanNumerals
{
    const NUMERALS = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    public static function convert($roman, $arabic = 0)
    {
        foreach (self::NUMERALS as $key => $value) {
            while (strpos($roman, $key) === 0) {
              return self::convert(substr($roman, strlen($key)), $arabic + $value);
            }
        }

        return $arabic;
    }
}
?>
