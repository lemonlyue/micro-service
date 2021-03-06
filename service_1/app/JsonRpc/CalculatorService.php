<?php

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="calculator-service", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class CalculatorService
{
    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function calculate(int $a, int $b): int
    {
        // 这里是服务方法的具体实现
        return $a + $b;
    }
}
