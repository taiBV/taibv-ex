<?php

namespace App\Models\RedisRepository;

use App\Models\RedisRepository\RedisModel;
use Illuminate\Support\Facades\Redis;

class DataRedis
{
    public function __construct(RedisModel $model)
    {
        $this->model = $model;
    }

    public function getAllByKey($key)
    {
        $data = $this->model->hgetall($key);
        $data = collect($data);

        return $data;
    }
}
