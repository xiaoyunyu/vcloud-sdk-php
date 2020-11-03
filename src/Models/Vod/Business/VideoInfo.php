<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_media.proto

namespace Vcloud\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Vcloud.Models.Vod.VideoInfo</code>
 */
class VideoInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *视频基础信息
     *
     * Generated from protobuf field <code>.Vcloud.Models.Vod.MediaBasicInfo BasicInfo = 1;</code>
     */
    protected $BasicInfo = null;
    /**
     *原视频信息
     *
     * Generated from protobuf field <code>.Vcloud.Models.Vod.VodSourceInfo SourceInfo = 2;</code>
     */
    protected $SourceInfo = null;
    /**
     *转码视频信息列表
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.TranscodeInfo TranscodeInfos = 3;</code>
     */
    private $TranscodeInfos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Vcloud\Models\Vod\Business\MediaBasicInfo $BasicInfo
     *          视频基础信息
     *     @type \Vcloud\Models\Vod\Business\VodSourceInfo $SourceInfo
     *          原视频信息
     *     @type \Vcloud\Models\Vod\Business\TranscodeInfo[]|\Google\Protobuf\Internal\RepeatedField $TranscodeInfos
     *          转码视频信息列表
     * }
     */
    public function __construct($data = NULL) {
        \Vcloud\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     *视频基础信息
     *
     * Generated from protobuf field <code>.Vcloud.Models.Vod.MediaBasicInfo BasicInfo = 1;</code>
     * @return \Vcloud\Models\Vod\Business\MediaBasicInfo
     */
    public function getBasicInfo()
    {
        return $this->BasicInfo;
    }

    /**
     *视频基础信息
     *
     * Generated from protobuf field <code>.Vcloud.Models.Vod.MediaBasicInfo BasicInfo = 1;</code>
     * @param \Vcloud\Models\Vod\Business\MediaBasicInfo $var
     * @return $this
     */
    public function setBasicInfo($var)
    {
        GPBUtil::checkMessage($var, \Vcloud\Models\Vod\Business\MediaBasicInfo::class);
        $this->BasicInfo = $var;

        return $this;
    }

    /**
     *原视频信息
     *
     * Generated from protobuf field <code>.Vcloud.Models.Vod.VodSourceInfo SourceInfo = 2;</code>
     * @return \Vcloud\Models\Vod\Business\VodSourceInfo
     */
    public function getSourceInfo()
    {
        return $this->SourceInfo;
    }

    /**
     *原视频信息
     *
     * Generated from protobuf field <code>.Vcloud.Models.Vod.VodSourceInfo SourceInfo = 2;</code>
     * @param \Vcloud\Models\Vod\Business\VodSourceInfo $var
     * @return $this
     */
    public function setSourceInfo($var)
    {
        GPBUtil::checkMessage($var, \Vcloud\Models\Vod\Business\VodSourceInfo::class);
        $this->SourceInfo = $var;

        return $this;
    }

    /**
     *转码视频信息列表
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.TranscodeInfo TranscodeInfos = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranscodeInfos()
    {
        return $this->TranscodeInfos;
    }

    /**
     *转码视频信息列表
     *
     * Generated from protobuf field <code>repeated .Vcloud.Models.Vod.TranscodeInfo TranscodeInfos = 3;</code>
     * @param \Vcloud\Models\Vod\Business\TranscodeInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranscodeInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Vcloud\Models\Vod\Business\TranscodeInfo::class);
        $this->TranscodeInfos = $arr;

        return $this;
    }

}
