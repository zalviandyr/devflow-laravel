<?php

namespace App\Services;

use Illuminate\Support\Str;

class BadWordFilterService
{
    public static function filter(string $oriText)
    {
        $text = explode(' ', $oriText);
        $badWords = config('bad-word');
        $result = [];

        for ($i = 0; $i < count($text); $i++) {
            $word1 = Str::lower($text[$i]);

            for ($j = 0; $j < count($badWords); $j++) {
                $word2 = Str::lower($badWords[$j]);

                if (Str::contains($word1, $word2)) {
                    $mask = array_fill(0, Str::length($word2), '*');
                    $result[] = Str::replace($word2, implode('', $mask), $word1);

                    continue 2;
                }
            }

            $result[] = $text[$i];
        }

        // restore case
        $result = implode(' ', $result);
        $final = [];
        $arrWord1 = str_split($oriText);
        $arrWord2 = str_split($result);

        for ($i = 0; $i < count($arrWord1); $i++) {
            $word1 = $arrWord1[$i];
            $word2 = $arrWord2[$i];

            if (Str::lower($word1) === Str::lower($word2)) {
                $final[] = $word1;
            } else {
                $final[] = $word2;
            }
        }

        return implode('', $final);
    }
}
