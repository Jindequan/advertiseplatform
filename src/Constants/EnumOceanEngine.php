<?php


namespace AdPlatform\Constants;


class EnumOceanEngine extends BaseEnum
{
    //BASE INFO
    private const OCEAN_ENGINE_BASE_URL = 'https://ad.oceanengine.com/open_api';//base url
    private const OCEAN_ENGINE_CURRENT_VERSION = '2';//api version

    //BUSINESS URI

    //Advertiser
    const ADVERTISER_INFO = 'advertiser/info/';//获取广告主信息

    //Campaign
    const CAMPAIGN_INFO = 'campaign/get/';//获取广告组
    const CAMPAIGN_CREATE = 'campaign/create/';//获取广告组

    const VIDEO_COVER_SET = 'tools/video_cover/suggest/';//同步视频封面

    public static function url($const)
    {
        return implode('/', [
            self::OCEAN_ENGINE_BASE_URL,
            self::OCEAN_ENGINE_CURRENT_VERSION,
            $const
        ]);
    }
}
