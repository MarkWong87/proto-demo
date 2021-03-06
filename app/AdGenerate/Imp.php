<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/DEMOAd.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Imp</code>
 */
class Imp extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string imp_id = 1;</code>
     */
    private $imp_id = '';
    /**
     * <code>string adspace_id = 2;</code>
     */
    private $adspace_id = '';
    /**
     * <code>.Imp.Banner banner = 3;</code>
     */
    private $banner = null;
    /**
     * <code>.AdType ad_type = 4;</code>
     */
    private $ad_type = 0;
    /**
     * <code>string adspace_type = 5;</code>
     */
    private $adspace_type = '';

    public function __construct() {
        App\AdGenerate\GPBMetadata\Proto\DEMOAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>string imp_id = 1;</code>
     */
    public function getImpId()
    {
        return $this->imp_id;
    }

    /**
     * <code>string imp_id = 1;</code>
     */
    public function setImpId($var)
    {
        GPBUtil::checkString($var, True);
        $this->imp_id = $var;
    }

    /**
     * <code>string adspace_id = 2;</code>
     */
    public function getAdspaceId()
    {
        return $this->adspace_id;
    }

    /**
     * <code>string adspace_id = 2;</code>
     */
    public function setAdspaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->adspace_id = $var;
    }

    /**
     * <code>.Imp.Banner banner = 3;</code>
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * <code>.Imp.Banner banner = 3;</code>
     */
    public function setBanner(&$var)
    {
        GPBUtil::checkMessage($var, \Imp_Banner::class);
        $this->banner = $var;
    }

    /**
     * <code>.AdType ad_type = 4;</code>
     */
    public function getAdType()
    {
        return $this->ad_type;
    }

    /**
     * <code>.AdType ad_type = 4;</code>
     */
    public function setAdType($var)
    {
        GPBUtil::checkEnum($var, \AdType::class);
        $this->ad_type = $var;
    }

    /**
     * <code>string adspace_type = 5;</code>
     */
    public function getAdspaceType()
    {
        return $this->adspace_type;
    }

    /**
     * <code>string adspace_type = 5;</code>
     */
    public function setAdspaceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->adspace_type = $var;
    }

}

