<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function index()
    {
        $data = Redis::hgetall('redis.key.edupiakid.paltform');
        dd($data);
    }
}
