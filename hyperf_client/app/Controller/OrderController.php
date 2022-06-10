<?php
/**
 * Created by PhpStorm
 * Description: OrderController
 * @author fyk
 * @E-mail: 414734650@qq.com
 * @Date 2022/5/13
 * Time 17:43
 */

namespace App\Controller;

use App\Constants\ErrorCode;
use App\JsonRpc\Order\OrderServiceInterface;
use App\Tools\Result;
use Hyperf\Di\Annotation\Inject;

class OrderController extends AbstractController
{
    /**
     * @Inject()
     * @var OrderServiceInterface
     */
    private $ServiceClient;

    /**
     * Interface createOrder
     * @return array
     * @author fyk
     * Time 2022/5/13
     */
    public function createOrder(): array
    {
        $input = $this->request->all();
        $result = $this->ServiceClient->createOrder($input);
        if ($result['code'] != ErrorCode::SUCCESS) {
            throw new \RuntimeException($result['message']);
        }
        return Result::success($result['data']);
    }

    /**
     * Interface getOrderDetail
     * @return array
     * @author fyk
     * Time 2022/5/13
     */
    public function getOrderDetail(): array
    {
        $id = (int)$this->request->input('id');
        $result = $this->ServiceClient->getOrderDetail($id);
        if ($result['code'] != ErrorCode::SUCCESS) {
            throw new \RuntimeException($result['message']);
        }
        return Result::success($result['data']);
    }

    /**
     * Interface getOrderList
     * @return array
     * @author fyk
     * Time 2022/5/13
     */
    public function getOrderList()
    {
        $result = $this->ServiceClient->getOrderList();
        if ($result['code'] != ErrorCode::SUCCESS) {
            throw new \RuntimeException($result['message']);
        }
        return Result::success($result['data']);
    }
}