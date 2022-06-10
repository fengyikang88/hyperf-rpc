<?php
/**
 * Created by PHP是世界上最好的语言
 * Description: ShopService
 * @author fyk
 * @E-mail: 414734650@qq.com
 * @Date 2022/5/20
 * @Time 10:20
 */

namespace App\JsonRpc\Shop;

use Hyperf\RpcClient\AbstractServiceClient;

class ShopService  extends AbstractServiceClient implements ShopServiceInterface
{
    /**
     * 定义对应服务提供者的服务名称
     * @var string
     */
    protected $serviceName = 'ShopService';
    /**
     * 定义对应服务提供者的服务协议
     * @var string
     */
    protected $protocol = 'jsonrpc-http';

    public function getShopList()
    {
        return $this->__request(__FUNCTION__, func_get_args());
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function createShop(array $params): mixed
    {
        return $this->__request(__FUNCTION__, $params);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getShopDetail(int $id): mixed
    {
        return $this->__request(__FUNCTION__, compact('id'));
    }




}
