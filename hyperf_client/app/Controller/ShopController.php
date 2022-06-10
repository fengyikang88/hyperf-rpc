<?php
/**
 * Created by PHP是世界上最好的语言
 * Description: ShopController
 * @author fyk
 * @E-mail: 414734650@qq.com
 * @Date 2022/5/20
 * @Time 10:19
 */

namespace App\Controller;

use App\Constants\ErrorCode;
use App\JsonRpc\Shop\ShopServiceInterface;
use App\Tools\Result;
use Hyperf\Di\Annotation\Inject;

/**
 * Class ShopController
 * @package App\Controller
 * @author fyk
 * Time 2022/5/20   10:25
 */
class ShopController extends AbstractController
{
    /**
     * @Inject()
     * @var ShopServiceInterface
     */
    private $ServiceClient;

    /**
     * Interface createOrder
     * @return array
     * @author fyk
     * Time 2022/5/13
     */
    public function createShop(): array
    {
        $input = $this->request->all();
        $result = $this->ServiceClient->createShop($input);
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
    public function getShopDetail(): array
    {
        $id = (int)$this->request->input('id');
        $result = $this->ServiceClient->getShopDetail($id);
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
    public function getShopList()
    {
        $result = $this->ServiceClient->getShopList();
        if ($result['code'] != ErrorCode::SUCCESS) {
            throw new \RuntimeException($result['message']);
        }
        return Result::success($result['data']);
    }
}
