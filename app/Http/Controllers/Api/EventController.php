<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RedisRepository\RedisModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(RedisModel $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return 1;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function store(Request $request)
    {
        try {
            $obj = $this->model->hset('taibv.test.event', time(), json_encode($request->all()));
            return ['code' => 1, 'msg' => 'success', 'data' => $obj];
        } catch (\Exception $e) {
            return ['code' => 0, 'msg' => 'fail'];
        }
    }

    /**
     * Display the latest resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lastest()
    {
        try {
            $list = $this->model->hgetall('taibv.test.event');
            return ['code' => 1, 'msg' => 'success', 'data' => array_values($list)];
        } catch (\Exception $e) {
            return ['code' => 0, 'msg' => 'fail'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
