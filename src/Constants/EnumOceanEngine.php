<?php


namespace AdPlatform\Constants;


class EnumOceanEngine
{
    //BASE INFO
    private const OCEAN_ENGINE_BASE_URL = 'https://ad.oceanengine.com/open_api';//base url
    private const OCEAN_ENGINE_CURRENT_VERSION = '2';//api version

    //BUSINESS URI
    const ADVERTISER_INFO = 'advertiser/info/';//获取广告主信息

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
