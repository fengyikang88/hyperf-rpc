<?php
// 服务定义
$consumerServices = [
    'UserService' => \App\JsonRpc\UserServiceInterface::class,
    'OrderService' => \App\JsonRpc\Order\OrderServiceInterface::class,
    'ShopService' => \App\JsonRpc\Shop\ShopServiceInterface::class,
];
return [
    'consumers' => value(function () use ($consumerServices) {
        $consumers = [];
        foreach ($consumerServices as $name => $interface) {
            $consumers[] = [
                'name' => $name,
                'service' => $interface,
//                'nodes' => [
//                    ['host' => '127.0.0.1', 'port' => 9600],
//                ],
                // 这个消费者要从哪个服务中心获取节点信息，如不配置则不会从服务中心获取节点信息
                'registry' => [
                    'protocol' => 'consul',
                    //这里的address,表示consul搭建在那台服务器上，就填写哪台服务器的IP
                    'address' => 'http://127.0.0.1:8500',
                ],
            ];
        }
        return $consumers;
    }),
];