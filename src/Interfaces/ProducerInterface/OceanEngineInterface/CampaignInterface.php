<?php

namespace AdPlatform\Interfaces\ProducerInterface\OceanEngineInterface;


interface CampaignInterface
{
    public function createCampaign($params) ;

    public function getCampaign($params) ;

    public function updateCampaign($params) ;

    public function updateStatus($params) ;
}
