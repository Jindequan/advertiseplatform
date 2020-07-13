<?php

namespace AdPlatform\RequestBody\OceanEngine\Campaign;

use AdPlatform\Abstracts\AbstractParam;

/**
 * Class CampaignCreate
 * @
 */
class CampaignCreate extends AbstractParam
{

    protected function rules(): array
    {
        return [
            'advertiser_id' => 'required|integer',
            'campaign_name' => 'required',
            'operation' => 'required|in:enable,disable',
            'budget_mode' => 'required|in:BUDGET_MODE_INFINITE,BUDGET_MODE_DAY',
            'budget' => 'integer|min:0',
            'landing_type' => 'required|in:LINK,APP,DPA,GOODS,STORE,SHOP,AWEME',
            'unique_fk' => ''
        ];
    }

    protected function genParams($params): array
    {
        return $params;
    }

    protected function genRequestParams($params)
    {
        return $params;
    }
}