<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/DEMOAd.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>MaterialMeta</code>
 */
class MaterialMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.AdType ad_type = 1;</code>
     */
    private $ad_type = 0;
    /**
     * <pre>
     * winnotice url
     * </pre>
     *
     * <code>string nurl = 2;</code>
     */
    private $nurl = '';
    /**
     * <pre>
     * 除detail_banner之外必须
     * </pre>
     *
     * <code>string title = 3;</code>
     */
    private $title = '';
    /**
     * <pre>
     * 来源, 默认dsp名
     * </pre>
     *
     * <code>string source = 4;</code>
     */
    private $source = '';
    /**
     * <code>.MaterialMeta.ImageMeta image_banner = 5;</code>
     */
    private $image_banner = null;
    /**
     * <pre>
     * 对于落地页广告才有
     * </pre>
     *
     * <code>.MaterialMeta.ExternalMeta external = 6;</code>
     */
    private $external = null;
    /**
     * <pre>
     * android应用下载才有
     * </pre>
     *
     * <code>.MaterialMeta.AndroidApp android_app = 7;</code>
     */
    private $android_app = null;
    /**
     * <pre>
     * ios应用下载才有
     * </pre>
     *
     * <code>.MaterialMeta.IosApp ios_app = 8;</code>
     */
    private $ios_app = null;
    /**
     * <pre>
     * 展现监测
     * </pre>
     *
     * <code>string show_url = 9;</code>
     */
    private $show_url = '';
    /**
     * <pre>
     * 点击监测
     * </pre>
     *
     * <code>string click_url = 10;</code>
     */
    private $click_url = '';

    public function __construct() {
        \GPBMetadata\Proto\DEMOAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.AdType ad_type = 1;</code>
     */
    public function getAdType()
    {
        return $this->ad_type;
    }

    /**
     * <code>.AdType ad_type = 1;</code>
     */
    public function setAdType($var)
    {
        GPBUtil::checkEnum($var, \AdType::class);
        $this->ad_type = $var;
    }

    /**
     * <pre>
     * winnotice url
     * </pre>
     *
     * <code>string nurl = 2;</code>
     */
    public function getNurl()
    {
        return $this->nurl;
    }

    /**
     * <pre>
     * winnotice url
     * </pre>
     *
     * <code>string nurl = 2;</code>
     */
    public function setNurl($var)
    {
        GPBUtil::checkString($var, True);
        $this->nurl = $var;
    }

    /**
     * <pre>
     * 除detail_banner之外必须
     * </pre>
     *
     * <code>string title = 3;</code>
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * <pre>
     * 除detail_banner之外必须
     * </pre>
     *
     * <code>string title = 3;</code>
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;
    }

    /**
     * <pre>
     * 来源, 默认dsp名
     * </pre>
     *
     * <code>string source = 4;</code>
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * <pre>
     * 来源, 默认dsp名
     * </pre>
     *
     * <code>string source = 4;</code>
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;
    }

    /**
     * <code>.MaterialMeta.ImageMeta image_banner = 5;</code>
     */
    public function getImageBanner()
    {
        return $this->image_banner;
    }

    /**
     * <code>.MaterialMeta.ImageMeta image_banner = 5;</code>
     */
    public function setImageBanner(&$var)
    {
        GPBUtil::checkMessage($var, \MaterialMeta_ImageMeta::class);
        $this->image_banner = $var;
    }

    /**
     * <pre>
     * 对于落地页广告才有
     * </pre>
     *
     * <code>.MaterialMeta.ExternalMeta external = 6;</code>
     */
    public function getExternal()
    {
        return $this->external;
    }

    /**
     * <pre>
     * 对于落地页广告才有
     * </pre>
     *
     * <code>.MaterialMeta.ExternalMeta external = 6;</code>
     */
    public function setExternal(&$var)
    {
        GPBUtil::checkMessage($var, \MaterialMeta_ExternalMeta::class);
        $this->external = $var;
    }

    /**
     * <pre>
     * android应用下载才有
     * </pre>
     *
     * <code>.MaterialMeta.AndroidApp android_app = 7;</code>
     */
    public function getAndroidApp()
    {
        return $this->android_app;
    }

    /**
     * <pre>
     * android应用下载才有
     * </pre>
     *
     * <code>.MaterialMeta.AndroidApp android_app = 7;</code>
     */
    public function setAndroidApp(&$var)
    {
        GPBUtil::checkMessage($var, \MaterialMeta_AndroidApp::class);
        $this->android_app = $var;
    }

    /**
     * <pre>
     * ios应用下载才有
     * </pre>
     *
     * <code>.MaterialMeta.IosApp ios_app = 8;</code>
     */
    public function getIosApp()
    {
        return $this->ios_app;
    }

    /**
     * <pre>
     * ios应用下载才有
     * </pre>
     *
     * <code>.MaterialMeta.IosApp ios_app = 8;</code>
     */
    public function setIosApp(&$var)
    {
        GPBUtil::checkMessage($var, \MaterialMeta_IosApp::class);
        $this->ios_app = $var;
    }

    /**
     * <pre>
     * 展现监测
     * </pre>
     *
     * <code>string show_url = 9;</code>
     */
    public function getShowUrl()
    {
        return $this->show_url;
    }

    /**
     * <pre>
     * 展现监测
     * </pre>
     *
     * <code>string show_url = 9;</code>
     */
    public function setShowUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->show_url = $var;
    }

    /**
     * <pre>
     * 点击监测
     * </pre>
     *
     * <code>string click_url = 10;</code>
     */
    public function getClickUrl()
    {
        return $this->click_url;
    }

    /**
     * <pre>
     * 点击监测
     * </pre>
     *
     * <code>string click_url = 10;</code>
     */
    public function setClickUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->click_url = $var;
    }

}

