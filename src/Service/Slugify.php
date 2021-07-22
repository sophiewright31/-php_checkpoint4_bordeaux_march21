<?php

namespace App\Service;

class Slugify
{
    public const CARAC_SPECIALS = [
        'à' => 'a',
        'é' => 'e',
        'è' => 'e',
        'ê' => 'e',
        'â' => 'a',
        'ô' => 'o',
        'ù' => 'u',
        'ç' => 'c',
        "'" => '-',
    ];

    public const CARAC_FORBIDDEN = [
        '!',
        '?',
        '.',
        ';',
        ':',
        ',',
    ];

    public function generate(string $input): string
    {
        $input = strtolower($input);
        foreach(self::CARAC_SPECIALS as $key => $char) {
            $input = str_replace($key, $char, $input);
        }
        $input = str_replace(self::CARAC_FORBIDDEN, '', $input);
        $input = $this->deleteMultipleSpace($input);
        $input = trim($input);
        return str_replace(' ', '-', $input);
    }

    public function deleteMultipleSpace(string $test): string
    {
        $tab = str_split($test);
        $max = count($tab);
        for($i = $max; $i>-1 ; $i--) {
            if($i+1 < $max) {
                if($tab[$i] === ' ' && $tab[$i+1] === ' ') {
                    array_splice($tab, $i, 1);
                }
            }
        }
        return implode($tab);
    }
}