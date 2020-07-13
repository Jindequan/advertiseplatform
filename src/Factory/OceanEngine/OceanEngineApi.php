<?php


namespace AdPlatform\Factory\OceanEngine;


use AdPlatform\Abstracts\AbstractApi;
use AdPlatform\Exception\ApiException;
use AdPlatform\Traits\InitTrait;
use Psr\Http\Message\ResponseInterface;

class OceanEngineApi extends AbstractApi
{
    use InitTrait;

    public function formatResult(ResponseInterface $response): array
    {
        $httpCode = $response->getStatusCode();
        if ($httpCode != 200) {
            throw new ApiException('请求接口出错:' . get_class());
        }
        $responseData = json_decode($response->getBody(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new ApiException('接口返回响应体错误:' . get_class() . ';' . json_last_error_msg() . $response->getBody());
        }
        $code = $responseData['code'] ?? null;
        if ($code !== 0) {
            throw new ApiException('接口请求被告知业务错误:code=' . $code . $response->getBody());
        }

        return $responseData['data'];
    }

    public function getHeaders()
    {

    }

    public function refreshHeader()
    {

    }

}