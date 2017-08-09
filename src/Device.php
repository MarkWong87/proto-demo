<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/acfunAd.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Device</code>
 */
class Device extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool dnt = 1;</code>
     */
    private $dnt = false;
    /**
     * <code>string ua = 2;</code>
     */
    private $ua = '';
    /**
     * <code>string ip = 3;</code>
     */
    private $ip = '';
    /**
     * <code>.Geo geo = 4;</code>
     */
    private $geo = null;
    /**
     * <code>string device_id = 5;</code>
     */
    private $device_id = '';
    /**
     * <code>string device_id_md5 = 6;</code>
     */
    private $device_id_md5 = '';
    /**
     * <code>string carrier = 7;</code>
     */
    private $carrier = '';
    /**
     * <code>string language = 8;</code>
     */
    private $language = '';
    /**
     * <code>string make = 9;</code>
     */
    private $make = '';
    /**
     * <code>string model = 10;</code>
     */
    private $model = '';
    /**
     * <code>string os = 11;</code>
     */
    private $os = '';
    /**
     * <code>string osv = 12;</code>
     */
    private $osv = '';
    /**
     * <code>bool js = 13;</code>
     */
    private $js = false;
    /**
     * <code>.Device.ConnectionType connection_type = 14;</code>
     */
    private $connection_type = 0;
    /**
     * <code>.Device.DeviceType device_type = 15;</code>
     */
    private $device_type = 0;

    public function __construct() {
        \GPBMetadata\Proto\AcfunAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool dnt = 1;</code>
     */
    public function getDnt()
    {
        return $this->dnt;
    }

    /**
     * <code>bool dnt = 1;</code>
     */
    public function setDnt($var)
    {
        GPBUtil::checkBool($var);
        $this->dnt = $var;
    }

    /**
     * <code>string ua = 2;</code>
     */
    public function getUa()
    {
        return $this->ua;
    }

    /**
     * <code>string ua = 2;</code>
     */
    public function setUa($var)
    {
        GPBUtil::checkString($var, True);
        $this->ua = $var;
    }

    /**
     * <code>string ip = 3;</code>
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * <code>string ip = 3;</code>
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip = $var;
    }

    /**
     * <code>.Geo geo = 4;</code>
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * <code>.Geo geo = 4;</code>
     */
    public function setGeo(&$var)
    {
        GPBUtil::checkMessage($var, \Geo::class);
        $this->geo = $var;
    }

    /**
     * <code>string device_id = 5;</code>
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * <code>string device_id = 5;</code>
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;
    }

    /**
     * <code>string device_id_md5 = 6;</code>
     */
    public function getDeviceIdMd5()
    {
        return $this->device_id_md5;
    }

    /**
     * <code>string device_id_md5 = 6;</code>
     */
    public function setDeviceIdMd5($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id_md5 = $var;
    }

    /**
     * <code>string carrier = 7;</code>
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * <code>string carrier = 7;</code>
     */
    public function setCarrier($var)
    {
        GPBUtil::checkString($var, True);
        $this->carrier = $var;
    }

    /**
     * <code>string language = 8;</code>
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * <code>string language = 8;</code>
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;
    }

    /**
     * <code>string make = 9;</code>
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * <code>string make = 9;</code>
     */
    public function setMake($var)
    {
        GPBUtil::checkString($var, True);
        $this->make = $var;
    }

    /**
     * <code>string model = 10;</code>
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * <code>string model = 10;</code>
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;
    }

    /**
     * <code>string os = 11;</code>
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * <code>string os = 11;</code>
     */
    public function setOs($var)
    {
        GPBUtil::checkString($var, True);
        $this->os = $var;
    }

    /**
     * <code>string osv = 12;</code>
     */
    public function getOsv()
    {
        return $this->osv;
    }

    /**
     * <code>string osv = 12;</code>
     */
    public function setOsv($var)
    {
        GPBUtil::checkString($var, True);
        $this->osv = $var;
    }

    /**
     * <code>bool js = 13;</code>
     */
    public function getJs()
    {
        return $this->js;
    }

    /**
     * <code>bool js = 13;</code>
     */
    public function setJs($var)
    {
        GPBUtil::checkBool($var);
        $this->js = $var;
    }

    /**
     * <code>.Device.ConnectionType connection_type = 14;</code>
     */
    public function getConnectionType()
    {
        return $this->connection_type;
    }

    /**
     * <code>.Device.ConnectionType connection_type = 14;</code>
     */
    public function setConnectionType($var)
    {
        GPBUtil::checkEnum($var, \Device_ConnectionType::class);
        $this->connection_type = $var;
    }

    /**
     * <code>.Device.DeviceType device_type = 15;</code>
     */
    public function getDeviceType()
    {
        return $this->device_type;
    }

    /**
     * <code>.Device.DeviceType device_type = 15;</code>
     */
    public function setDeviceType($var)
    {
        GPBUtil::checkEnum($var, \Device_DeviceType::class);
        $this->device_type = $var;
    }

}

