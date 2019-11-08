<?php


namespace App\Formatter;

class ApiFormaterSuccess
{
    public static function make(array $data, string $message ='')
    {
        if (empty($message)) {
            return [
                'status' => true,
                'message' => $message,
                'data' => $data
            ];
        }

        return [
            'status' => true,
            'data' => $data
        ];
    }

    public static function makeWithOutData(string $message)
    {
        return [
            'status' => true,
            'message' => $message
        ];
    }
}
