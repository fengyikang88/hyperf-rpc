<?php
/**
 * Created by PhpStorm
 * Description: OrderService
 * @author fyk
 * @E-mail: 414734650@qq.com
 * @Date 2022/5/13
 * Time 15:21
 */

namespace App\JsonRpc\Order;

use App\Tools\Result;
use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="OrderService", protocol="jsonrpc-http", server="jsonrpc-http",publishTo="consul")
 */
class OrderService implements OrderServiceInterface
{


    /**
     * 生成订单
     * Interface createOrder
     * @param array $params
     * @return array
     * @author fyk
     * Time 2022/5/13
     */
    public function createOrder(array $params): array
    {
        if (empty($params)) {
            return Result::error('参数不能为空');
        }

        return Result::success($params);

    }

    /**
     * 订单列表
     * Interface getOrderList
     * @return array
     * @author fyk
     * Time 2022/5/13
     */
    public function getOrderList(): array
    {
        $data = [[
            'id' => 1,
            'order_sn' => '123456789',
            'order_status' => 1,
            'order_amount' => '100.00',
            'add_time' => '2020-05-13 15:00:00',
            'pay_time' => '2020-05-13 15:00:00',
            'consignee' => '张三',
            'mobile' => '13800138000',
            'address' => '广东省广州市天河区天河路',
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
                'order_sn' => '543534534',
                'order_status' => 1,
                'order_amount' => '100.00',
                'add_time' => '2020-05-13 16:00:00',
                'pay_time' => '2020-05-13 16:00:00',
                'consignee' => '李四',
                'mobile' => '13800138000',
                'address' => '广东省深圳市南山区南山路',
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
     * 订单详情
     * Interface getOrderDetail
     * @param int $id
     * @return array
     * @author fyk
     * Time 2022/5/13
     */
    public function getOrderDetail(int $id): array
    {
        if (empty($id)) {
            return Result::error('参数不能为空');
        }
        if ($id == 1) {
            $data = [
                'id' => 1,
                'order_sn' => '123456789',
                'order_status' => 1,
                'order_amount' => '100.00',
                'add_time' => '2020-05-13 15:00:00',
                'pay_time' => '2020-05-13 15:00:00',
                'consignee' => '张三',
                'mobile' => '13800138000',
                'address' => '广东省广州市天河区天河路',
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