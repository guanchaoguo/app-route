<?php
//自动加载
require __DIR__ . '/../vendor/autoload.php';

//实例化服务器容器，注册事件，路由服务提供者
$app = new Illuminate\Container\Container;

//服务容器【服务的注册和解析】
with(new Illuminate\Events\EventServiceProvider($app))->register();
with(new Illuminate\Routing\RoutingServiceProvider($app))->register();

//加载路由
require __DIR__ . '/../app/Http/routes.php';

//实例化请求并分发处理请求
$request = Illuminate\Http\Request::CreateFromGlobals();
$response = $app['router']->dispatch($request);

//返回请求响应
$response->send();
