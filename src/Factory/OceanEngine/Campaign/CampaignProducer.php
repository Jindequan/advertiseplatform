<?php

namespace AdPlatform\Factory\OceanEngine\Campaign;

use AdPlatform\Abstracts\AbstractProducer;
use AdPlatform\Constants\EnumOceanEngine;
use AdPlatform\Exception\ApiException;
use AdPlatform\Factory\OceanEngine\OceanEngineApi;
use AdPlatform\Interfaces\ProducerInterface\OceanEngineInterface\CampaignInterface;
use AdPlatform\RequestBody\OceanEngine\Campaign\CampaignCreate;
use AdPlatform\Traits\InitTrait;

class CampaignProducer extends AbstractProducer implements CampaignInterface
{
    use InitTrait;

    public function createCampaign($params)
    {
        throw new ApiException();
        $url = EnumOceanEngine::url(EnumOceanEngine::CAMPAIGN_CREATE);
        $paramBuilder = new CampaignCreate();
        $requestBody = $paramBuilder->build($params);

        $header = [
            'Access-Token' => 'fe3af94b4c5f3a8721759ea1763269b7a3f3a3fe',
            'Content-Type' => 'application/json'
        ];

        $data = [
            'body' => json_encode($requestBody),
        ];

        return OceanEngineApi::init()->doRequest('post', $url, $header, $data);
    }

    public function getCampaign($params)
    {
        $url = EnumOceanEngine::url(EnumOceanEngine::CAMPAIGN_INFO);
        //todo
    }

    public function updateCampaign($params)
    {
        // TODO: Implement updateCampaign() method.
    }

    public function updateStatus($params)
    {
        // TODO: Implement updateStatus() method.
    }
}