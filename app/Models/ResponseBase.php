<?php

namespace App\Models;


class ResponseBase 
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }
    
    public function createResponseBase($status, $message, $data) {
        return new ResponseBase($status, $message, $data);
    }
}
