<?php

namespace App\Controllers;

class Posts extends BaseController
{
    public function index()
    {
        return json_encode([
            "status" => "success",
            "message" => "Health Check: API v1"
        ]);
    }
}
