<?php


namespace AdPlatform\Interfaces\ProducerInterface\OceanEngineInterface;


use phpDocumentor\Reflection\Types\Mixed_;

interface CampaignInterface
{
    public function createCampaign($params) ;

    public function getCampaign($params) ;

    public function updateCampaign($params) ;

    public function updateStatus($params) ;
}
