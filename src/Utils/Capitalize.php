<?php

namespace App\Utils;

use App\Interfaces\ITransform;

class Capitalize implements ITransform
{
    /**
     * @param String $str
     * @return String
     */
    public function transform(string $str): string
    {
        for ($i = 0; $i < strlen($str); $i++) {
            // Capitalize every other letter
            if ($i % 2 != 0) {
                $str[$i] = strtoupper($str[$i]);
            }
        }
        return $str;
    }
}