<?php

namespace App\Controllers;

class Api extends BaseController
{
    public function index()
    {
        return json_encode([
            "status" => "success",
            "message" => "Health Check: API v1"
        ]);
    }
}