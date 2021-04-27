<?php

class StringHelper
{
    static function countVowel($content)
    {
        $content = strtolower($content);
        $ar = str_split($content, 1);
        $count = 0;
        foreach ($ar as $value) {
            if ($value == 'a' || $value == 'e' || $value == 'i' || $value == 'o' || $value == 'u') {
                $count += 1;
            }
        }
        echo "Number of vowel is: $count" . PHP_EOL;
    }
}

StringHelper::countVowel("I am doing my best.");
