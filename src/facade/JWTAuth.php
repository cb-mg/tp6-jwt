<?php

namespace cuarb\jwt\facade;

use think\Facade;

/**
 * Class JWTAuth
 *
 * @package cuarb\jwt\facade
 * @mixin \cuarb\jwt\JWTAuth
 *
 * @method string builder(array $user = []) static Token构建
 * @method array auth() static Token验证
 * @method string refresh() static Token刷新
 * @method array getPayload() static 获取Payload
 * @method mixed invalidate($token) static 添加Token至黑名单
 * @method mixed validate($token) static 验证Token是否在黑名单
 */
class JWTAuth extends Facade
{
    protected static function getFacadeClass(): string
    {
        return 'cuarb\jwt\JWTAuth';
    }
}
