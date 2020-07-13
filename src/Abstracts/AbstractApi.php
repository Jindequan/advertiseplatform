<?php


namespace AdPlatform\Abstracts;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractApi extends Client
{
    final public function doRequest(string $method, $uri = '', array $headers = [], array $options = [])
    {
        $res = $this->request($method, $uri, array_merge(['headers' => $headers], $options));

        return $this->formatResult($res);
    }

    abstract public function formatResult(ResponseInterface $data) : array ;
}