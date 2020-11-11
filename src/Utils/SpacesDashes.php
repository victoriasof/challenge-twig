<?php

namespace App\Utils;

use App\Interfaces\ITransform;

class SpacesDashes implements ITransform
{
    /**
     * @param String $str
     * @return String
     */
    public function transform(string $str): string
    {
        return str_replace(" ", "-", $str);
    }
}