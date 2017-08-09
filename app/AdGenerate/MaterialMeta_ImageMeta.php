<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/acfunAd.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>MaterialMeta.ImageMeta</code>
 */
class MaterialMeta_ImageMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * 应用下载额外的描述
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    private $description = '';
    /**
     * <pre>
     * 大图小图的问题
     * </pre>
     *
     * <code>uint32 width = 2;</code>
     */
    private $width = 0;
    /**
     * <code>uint32 height = 3;</code>
     */
    private $height = 0;
    /**
     * <pre>
     * 图片的外链, 常用格式
     * </pre>
     *
     * <code>string url = 4;</code>
     */
    private $url = '';
    /**
     * <pre>
     *组图的外链，三个url
     * </pre>
     *
     * <code>string urls = 5;</code>
     */
    private $urls = '';
    /**
     * <pre>
     *头条开屏广告投放的日期时间
     * </pre>
     *
     * <code>uint64 date_timestamp = 6;</code>
     */
    private $date_timestamp = 0;
    /**
     * <pre>
     *头条开屏广告投放的生效时间
     * </pre>
     *
     * <code>uint64 start_timestamp = 7;</code>
     */
    private $start_timestamp = 0;
    /**
     * <pre>
     *头条开屏广告投放的失效时间
     * </pre>
     *
     * <code>uint64 end_timestamp = 8;</code>
     */
    private $end_timestamp = 0;

    public function __construct() {
        App\AdGenerate\GPBMetadata\Proto\AcfunAd::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * 应用下载额外的描述
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <pre>
     * 应用下载额外的描述
     * </pre>
     *
     * <code>string description = 1;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <pre>
     * 大图小图的问题
     * </pre>
     *
     * <code>uint32 width = 2;</code>
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * <pre>
     * 大图小图的问题
     * </pre>
     *
     * <code>uint32 width = 2;</code>
     */
    public function setWidth($var)
    {
        GPBUtil::checkUint32($var);
        $this->width = $var;
    }

    /**
     * <code>uint32 height = 3;</code>
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * <code>uint32 height = 3;</code>
     */
    public function setHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->height = $var;
    }

    /**
     * <pre>
     * 图片的外链, 常用格式
     * </pre>
     *
     * <code>string url = 4;</code>
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * <pre>
     * 图片的外链, 常用格式
     * </pre>
     *
     * <code>string url = 4;</code>
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;
    }

    /**
     * <pre>
     *组图的外链，三个url
     * </pre>
     *
     * <code>string urls = 5;</code>
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * <pre>
     *组图的外链，三个url
     * </pre>
     *
     * <code>string urls = 5;</code>
     */
    public function setUrls($var)
    {
        GPBUtil::checkString($var, True);
        $this->urls = $var;
    }

    /**
     * <pre>
     *头条开屏广告投放的日期时间
     * </pre>
     *
     * <code>uint64 date_timestamp = 6;</code>
     */
    public function getDateTimestamp()
    {
        return $this->date_timestamp;
    }

    /**
     * <pre>
     *头条开屏广告投放的日期时间
     * </pre>
     *
     * <code>uint64 date_timestamp = 6;</code>
     */
    public function setDateTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->date_timestamp = $var;
    }

    /**
     * <pre>
     *头条开屏广告投放的生效时间
     * </pre>
     *
     * <code>uint64 start_timestamp = 7;</code>
     */
    public function getStartTimestamp()
    {
        return $this->start_timestamp;
    }

    /**
     * <pre>
     *头条开屏广告投放的生效时间
     * </pre>
     *
     * <code>uint64 start_timestamp = 7;</code>
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_timestamp = $var;
    }

    /**
     * <pre>
     *头条开屏广告投放的失效时间
     * </pre>
     *
     * <code>uint64 end_timestamp = 8;</code>
     */
    public function getEndTimestamp()
    {
        return $this->end_timestamp;
    }

    /**
     * <pre>
     *头条开屏广告投放的失效时间
     * </pre>
     *
     * <code>uint64 end_timestamp = 8;</code>
     */
    public function setEndTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_timestamp = $var;
    }

}
