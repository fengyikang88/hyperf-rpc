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
     * @param int $gender
     * @return array
     */
    public function createUser(string $name, int $gender): array
    {
        if (empty($name)) {
            throw new \RuntimeException("name不能为空");
        }
        $result = [
            'name' => $name,
            'gender' => $gender,
        ];
        return Result::success($result);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getUserInfo(int $id): array
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