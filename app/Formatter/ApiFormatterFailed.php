<?php

namespace App\Formatter;

class ApiFormatterFailed
{
    public static function make(string $message)
    {
        return [
            'success' => false,
            'message' => $message,
        ];
    }
}
