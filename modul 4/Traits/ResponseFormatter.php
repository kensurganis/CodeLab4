<?php

namespace Traits;

//DISIMULASIKAN INI TRAIT UNTUK FORMATER JSON RESPONSE
trait ResponseFormatter
{
    public function ResponseFormatter($code, $message, $data = null)
    {
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data
        ]);
    }
}