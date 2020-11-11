<?php

namespace App\Utils;

class Logger
{
    /**
     * @param String $str
     * @return void
     */
    public function log(string $str): void
    {
        //$this->message .= "\n"; // Add a newline before saving to file
        //file_put_contents('log.info', $str, FILE_APPEND); // Saves a log.info file in public folder. It does not override the file if exists
    }
}