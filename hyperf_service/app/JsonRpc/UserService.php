<?php

namespace App\JsonRpc;

use App\Tools\Result;
use Hyperf\RpcServer\Annotation\RpcService;

/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性
 * @RpcService(name="UserService", protocol="jsonrpc-http", server="jsonrpc-http",publishTo="consul")
 */
class UserService implements UserServiceInterface
{
    /**
     * @param string $name
     * @param string $gender
     * @return string
     */
    public function createUser(string $name, int $gender)
    {
        if (empty($name)) {
            throw new \RuntimeException("name不能为空");
        }
        $result = 1;
        return $result ? "success" : "fail";
    }

    /**
     * @param int $id
     * @return array
     */
    public function getUserInfo(int $id)
    {
        if (empty($id)) {
            throw new \RuntimeException("user not found");
        }
        $data = [
            'name' => "张三",
            'gender' => 1,
        ];
        return Result::success($data);

    }
}