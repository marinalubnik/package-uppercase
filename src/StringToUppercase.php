<?php

declare(strict_types=1);

class StringToUppercase
{
    public static function getStringToUpper(string $string): string
    {
        return mb_strtoupper($string, 'UTF-8');
    }

}