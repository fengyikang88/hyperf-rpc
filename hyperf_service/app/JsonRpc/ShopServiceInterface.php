<?php

namespace App\JsonRpc;

interface ShopServiceInterface
{
    public function createShop(array $params);
    public function getShopList();
    public function getShopDetail(int $id);
}