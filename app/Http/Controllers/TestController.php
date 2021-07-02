<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RedisRepository\DataRedis;
use App\Models\RedisRepository\RedisModel;
use Faker\Provider\DateTime;
use http\Env\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function __construct(
       RedisModel $model
    )
    {
        $this->model = $model;
    }

    public function index()
    {
        return 1;
    }
    public function create()
    {
//        return
//        $obj = [
//            'id' => time(),
//            'name' => 'Event - ' .now(),
//            'description' => 'Event Description'
//        ];
//        $this->model->hset('taibv.test.event',time().time(),json_encode($obj));
        return 1;
    }
}
