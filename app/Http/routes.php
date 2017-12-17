<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   	return view('welcome');
   // 	//设置配置变量
  	// Config::set('app.timezone','ddd');
   
   // 	//读取配置变量
   // 	echo Config::get('app.timezone');
   
   // 	//读取环境变量env下面的配置项
   // 	echo env('DB_HOST');



});
Route::get('niu',function()
{
	echo '牛牛和羊羊';
});

Route::get('form',function()
{
	return view('form');
});
Route::post('test',function()
{
	echo 'this is test';
});
//带参数路由
Route::get('/goods/{id}',function($id)
{
	echo $id;
	
})->where('id','\d+');

//多参数路由
Route::get('goods/list/{name}-{id}',function($name,$id)
{
	echo $name;
	echo $id;
})->where('id','\d+')->where('name','[a-zA-Z]+');

//别名设置
Route::get('/Admin/user/add',[
	'as'=>'uadd',
	'uses'=>function()
	{
		echo 333;
	}
	]);

Route::get('test1',function()
{
	//使用别名的方式来创建url
	//输入url路径
	echo route('uadd');

	//跳转404
	//abort(404);
});

//路由组
Route::group([],function()
{
	Route::get('/admin',function()
	{
		echo '首页';
	});
	Route::get('/admin',function()
	{
		echo '首页';
	});
});

