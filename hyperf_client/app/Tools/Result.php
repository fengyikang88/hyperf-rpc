<?php

namespace App\Tools;

use App\Constants\ErrorCode;

class Result
{
    public static function success($data = []): array
    {
        return static::result(ErrorCode::SUCCESS, ErrorCode::getMessage(ErrorCode::SUCCESS), $data);
    }

    public static function error($message = '', $code = ErrorCode::ERROR, $data = []): array
    {
        if (empty($message)) {
            return static::result($code, ErrorCode::getMessage($code), $data);
        } else {
            return static::result($code, $message, $data);
        }
    }

    protected static function result($code, $message, $data): array
    {
        return [
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ];
    }
}
