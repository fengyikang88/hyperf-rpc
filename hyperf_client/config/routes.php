<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::addGroup('/api', function () {
    //用户
    Router::get('/createUser', [\App\Controller\UserController::class, 'createUser']);
    Router::get('/getUserInfo', [\App\Controller\UserController::class, 'getUserInfo']);
    Router::get('/getInfo', [\App\Controller\UserController::class, 'getInfo']);
    //订单
    Router::get('/createOrder', [\App\Controller\OrderController::class, 'createOrder']);
    Router::get('/getOrderDetail', [\App\Controller\OrderController::class, 'getOrderDetail']);
    Router::get('/getOrderList', [\App\Controller\OrderController::class, 'getOrderList']);
    //购物
    Router::get('/createShop', [\App\Controller\ShopController::class, 'createShop']);
    Router::get('/getShopDetail', [\App\Controller\ShopController::class, 'getShopDetail']);
    Router::get('/getShopList', [\App\Controller\ShopController::class, 'getShopList']);
});

Router::get('/favicon.ico', function () {
    return '';
});
