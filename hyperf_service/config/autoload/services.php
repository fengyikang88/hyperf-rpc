<?php
/**
 * Created by PhpStorm
 * Description: ${NAME}
 * @author fyk
 * @E-mail: 414734650@qq.com
 * @Date 2022/5/13
 * Time 12:48
 */

return [
    'enable' => [
        // 开启服务发现
        'discovery' => true,
        // 开启服务注册
        'register' => true,
    ],
    // 服务消费者相关配置
    'consumers' => [],
    // 服务提供者相关配置
    'providers' => [],
    // 服务驱动相关配置
    'drivers' => [
        'consul' => [
            'uri' => 'http://127.0.0.1:8500',
            'token' => '',
            'check' => [
                'deregister_critical_service_after' => '90m',
                'interval' => '1s',
            ],
        ],
//        'nacos' => [
//            // nacos server url like https://nacos.hyperf.io, Priority is higher than host:port
//            // 'url' => '',
//            // The nacos host info
//            'host' => '127.0.0.1',
//            'port' => 8848,
//            // The nacos account info
//            'username' => null,
//            'password' => null,
//            'guzzle' => [
//                'config' => null,
//            ],
//            'group_name' => 'api',
//            'namespace_id' => 'namespace_id',
//            'heartbeat' => 5,
//            'ephemeral' => false, // 是否注册临时实例
//        ],
    ],
];