<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/acfunAd.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Imp.Banner</code>
 */
class Imp_Banner extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>uint32 width = 1;</code>
     */
    private $width = 0;
    /**
     * <code>uint32 height = 2;</code>
     */
    private $height = 0;

    public function __construct() {
        App\AdGenerate\GPBMetadata\Proto\AcfunAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>uint32 width = 1;</code>
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * <code>uint32 width = 1;</code>
     */
    public function setWidth($var)
    {
        GPBUtil::checkUint32($var);
        $this->width = $var;
    }

    /**
     * <code>uint32 height = 2;</code>
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * <code>uint32 height = 2;</code>
     */
    public function setHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->height = $var;
    }

}
