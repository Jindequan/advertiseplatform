<?php

namespace AdPlatform\RequestBody\OceanEngine\Advertiser;

use AdPlatform\Abstracts\AbstractParam;

/**
 * Class AdvertiserInfo
 * @package AdPlatform\RequestBody\OceanEngine\Advertiser
 *
 * @property array $advertiser_ids necessary
 * @property array $fields
 */
class AdvertiserInfo extends AbstractParam
{
    public function rules() :array
    {
        return [
            'advertiser_ids' => 'required|array',
            'advertiser_ids.*' => 'required|integer',
            'fields' => 'array',
        ];
    }

    public function genParams($params): array
    {
        $params['advertiser_ids'] = array_map('intval', $params['advertiser_ids']);
        return $params;
    }

    public function genRequestParams($params)
    {
        $params['fields'] = !empty($params['fields']) ?: [
            'id',
            'name',
            "description",
            "email",
            "contacter",
            "phonenumber",
            "role",
            "status",
            "telephone",
            "address",
            "license_no",
            "company",
            "brand",
            "promotion_area",
            "promotion_center_province",
            "promotion_center_city",
            "balance",
            "create_time",
            'first_industry_name',
            'second_industry_name',
        ];

        return [
            'advertiser_ids' => json_encode($params['advertiser_ids']),
            'fields' => json_encode($params['fields'])
        ];
    }
}
