<?php
/**
 * Created by PhpStorm
 * Description: OrderServiceInterface
 * @author fyk
 * @E-mail: 414734650@qq.com
 * @Date 2022/5/13
 * Time 17:32
 */

namespace App\JsonRpc\Order;
/**
 * Interface OrderServiceInterface
 * @package App\JsonRpc\Order
 * @author fyk
 * Time 2022/5/13
 */
interface OrderServiceInterface
{
    public function createOrder(array $params);
    public function getOrderList();
    public function getOrderDetail(int $id);
}