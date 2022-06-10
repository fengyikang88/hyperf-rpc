<?php
/**
 * Created by PhpStorm
 * Description: OrderService
 * @author fyk
 * @E-mail: 414734650@qq.com
 * @Date 2022/5/13
 * Time 17:37
 */

namespace App\JsonRpc\Order;

use Hyperf\RpcClient\AbstractServiceClient;

class OrderService extends AbstractServiceClient implements OrderServiceInterface

{
    /**
     * 定义对应服务提供者的服务名称
     * @var string
     */
    protected $serviceName = 'OrderService';
    /**
     * 定义对应服务提供者的服务协议
     * @var string
     */
    protected $protocol = 'jsonrpc-http';

    public function getOrderList()
    {
        return $this->__request(__FUNCTION__);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function createOrder(array $params): mixed
    {
        return $this->__request(__FUNCTION__, $params);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getOrderDetail(int $id): mixed
    {
        return $this->__request(__FUNCTION__, compact('id'));
    }
}