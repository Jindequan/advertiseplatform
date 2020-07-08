<?php


namespace AdPlatform\Interfaces\ProducerInterface\OceanEngineInterface;


interface PlanInterface
{
    public function getPlan($params);

    public function createPlan($params);

    public function updatePlan($params);

    public function updateStatus($params);

    public function updateBudGet($params);

    public function updateBId($params);

    public function getRejectReason($params);
}
