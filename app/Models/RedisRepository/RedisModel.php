<?php

namespace App\Models\RedisRepository;

use Illuminate\Support\Facades\Redis;

class RedisModel
{

    public function hgetall($key)
    {
        try {
            $datas = Redis::hgetall($key);
            return $datas;
        } catch (\Exception $e) {
            return null;
        }
    }

    public function hget($key, $value)
    {
        try {
            $datas = Redis::hget($key, $value);
            return $datas;
        } catch (\Exception $e) {
            return null;
        }
    }

    public function hset($key, $name, $value)
    {
        try {
            $datas = Redis::hset($key, $name, $value);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function rPush($key, $param)
    {
        try {
            $data = Redis::rpush($key, $param);
            return $data;
        } catch (\Exception $e) {
            return null;
        }
    }
}
