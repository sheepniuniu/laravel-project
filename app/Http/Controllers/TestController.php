<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //获取所有的数据
        // $res =DB::table('user')->get();
        //获取单条数据
        // $res =DB::table('user')->where('uid','=','2')->first();
        //插入数据
        // $res =DB::table('user')->insert([
        //     'username'=>'lijian'
        // ]);
        //更新数据
        // $res =DB::table('user')
        //     ->where('uid', 1)
        //     ->update(['username' => 'liniuniu']);
        //删除数据     
        // $res =DB::table('user')->where('uid','=','3')->delete();
        //查询单条结果的某个字段
        // $res =DB::table('user')->where('uid','=','2')->value('username');
        //查询指定结果集中的某一列
        // $res =DB::table('user')->lists('uid');
        // 连贯操作
        // $res =DB::table('user')->select('username')->get();
        $res =DB::table('user')->where('uid',2)->orWhere('uid',1)->get(); 
        dd($res);
        
    }

}
