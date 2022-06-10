<?php

namespace App\JsonRpc;

use App\Tools\Result;
use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="ShopService", protocol="jsonrpc-http", server="jsonrpc-http",publishTo="consul")
 */
class ShopService implements ShopServiceInterface
{

    /**
     * 新增商品
     * Interface createShop
     * @param array $params
     * @return array
     * @author fyk
     * Time 2022/5/15
     */
    public function createShop(array $params): array
    {
        if (empty($params)) {
            return Result::error('参数不能为空');
        }

        return Result::success($params);

    }

    /**
     * 商品列表
     * Interface getOrderList
     * @return array
     * @author fyk
     * Time 2022/5/15
     */
    public function getShopList(): array
    {
        $data = [[
            'id' => 1,
            'goods_name' => '商品名称',
            'goods_price' => '100.00',
            'goods_num' => 1,
            'goods_img' => 'http://www.baidu.com/img/baidu_jgylogo3.gif',
            'goods_attr' => '商品属性',
            'goods_spec' => '商品规格',
            'goods_category' => '商品分类',
            'goods_brand' => '商品品牌'],
            [
                'id' => 2,
                'goods_name' => '商品名称',
                'goods_price' => '100.00',
                'goods_num' => 1,
                'goods_img' => 'http://www.baidu.com/img/baidu_jgylogo3.gif',
                'goods_attr' => '商品属性',
                'goods_spec' => '商品规格',
                'goods_category' => '商品分类',
                'goods_brand' => '商品品牌'
            ],

        ];

        return Result::success($data);

    }

    /**
     * 商品详情
     * Interface getOrderDetail
     * @param int $id
     * @return array
     * @author fyk
     * Time 2022/5/15
     */
    public function getShopDetail(int $id): array
    {
        if (empty($id)) {
            return Result::error('参数不能为空');
        }
        if ($id == 1) {
            $data = [
                'id' => 1,
                'goods_name' => '商品名称',
                'goods_price' => '100.00',
                'goods_num' => 1,
                'goods_img' => 'http://www.baidu.com/img/baidu_jgylogo3.gif',
                'goods_attr' => '商品属性',
                'goods_spec' => '商品规格',
                'goods_category' => '商品分类',
                'goods_brand' => '商品品牌'];
            return Result::success($data);
        } else {
            return Result::error('订单不存在');
        }

    }

}