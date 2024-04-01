<?php

namespace App\Models;


class ResponseBase 
{
    public function createResponseBase($status, $message, $data) {
        return new ResponseBase($status, $message, $data);
    }
}
