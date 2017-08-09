<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/DEMOAd.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>BidResponse</code>
 */
class BidResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string request_id = 1;</code>
     */
    private $request_id = '';
    /**
     * <code>repeated .SeatBid seatbids = 2;</code>
     */
    private $seatbids;
    /**
     * <code>uint64 error_code = 3;</code>
     */
    private $error_code = 0;

    public function __construct() {
        \GPBMetadata\Proto\DEMOAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>string request_id = 1;</code>
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * <code>string request_id = 1;</code>
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;
    }

    /**
     * <code>repeated .SeatBid seatbids = 2;</code>
     */
    public function getSeatbids()
    {
        return $this->seatbids;
    }

    /**
     * <code>repeated .SeatBid seatbids = 2;</code>
     */
    public function setSeatbids(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SeatBid::class);
        $this->seatbids = $arr;
    }

    /**
     * <code>uint64 error_code = 3;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <code>uint64 error_code = 3;</code>
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkUint64($var);
        $this->error_code = $var;
    }

}

