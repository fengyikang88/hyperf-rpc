<?php
/**
 * Created by PHP是世界上最好的语言
 * Description: ShopServiceInterface
 * @author fyk
 * @E-mail: 414734650@qq.com
 * @Date 2022/5/20
 * @Time 10:20
 */

namespace App\JsonRpc\Shop;

interface ShopServiceInterface
{

    public function createShop(array $params);
    public function getShopList();
    public function getShopDetail(int $id);
}