<?php
declare(strict_types=1);

namespace App\Controller;

use App\Constants\ErrorCode;
use App\JsonRpc\UserServiceInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use App\Tools\Result;

// Hyperf 会自动为此方法生成一个 /user/index 的路由，允许通过 GET 或 POST 方式请求

/**
 * Class UserController
 * @package App\Controller
 * @AutoController()
 */
class UserController extends AbstractController
{
    /**
     * @Inject()
     * @var UserServiceInterface
     */
    private $userServiceClient;

    public function createUser()
    {
        $name = (string)$this->request->input('name', '');
        $gender = (int)$this->request->input('gender', 0);
        $result = $this->userServiceClient->createUser($name, $gender);
        if ($result['code'] != ErrorCode::SUCCESS) {
            throw new \RuntimeException($result['message']);
        }
        return Result::success($result['data']);
    }

    public function getUserInfo()
    {
        $id = (int)$this->request->input('id');
        $result = $this->userServiceClient->getUserInfo($id);
        if ($result['code'] != ErrorCode::SUCCESS) {
            throw new \RuntimeException($result['message']);
        }
        return Result::success($result['data']);
    }


    public function getInfo()
    {
        return Result::success(['name' => '我进来了啊', 'version' => '1.0.0']);
    }
}