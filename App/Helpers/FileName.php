<?php

namespace App\Helpers;

class FileName
{
    public static function generate($fileName, $directory): string
    {
        $path = "/public/images/$directory/$fileName";
        return $path;
    }
}