<?php

namespace App\Traits;

trait EnumTrait
{
    public static function strings(): array
    {
        $strings = [];

        foreach (self::cases() as $case) {
            $strings[] = $case->name;
        }

        return $strings;
    }
}
