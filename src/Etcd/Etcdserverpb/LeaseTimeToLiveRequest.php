<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.LeaseTimeToLiveRequest</code>
 */
class LeaseTimeToLiveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID is the lease ID for the lease.
     *
     * Generated from protobuf field <code>int64 ID = 1;</code>
     */
    private $ID = 0;
    /**
     * keys is true to query all the keys attached to this lease.
     *
     * Generated from protobuf field <code>bool keys = 2;</code>
     */
    private $keys = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $ID
     *           ID is the lease ID for the lease.
     *     @type bool $keys
     *           keys is true to query all the keys attached to this lease.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * ID is the lease ID for the lease.
     *
     * Generated from protobuf field <code>int64 ID = 1;</code>
     * @return int|string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * ID is the lease ID for the lease.
     *
     * Generated from protobuf field <code>int64 ID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setID($var)
    {
        GPBUtil::checkInt64($var);
        $this->ID = $var;

        return $this;
    }

    /**
     * keys is true to query all the keys attached to this lease.
     *
     * Generated from protobuf field <code>bool keys = 2;</code>
     * @return bool
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * keys is true to query all the keys attached to this lease.
     *
     * Generated from protobuf field <code>bool keys = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setKeys($var)
    {
        GPBUtil::checkBool($var);
        $this->keys = $var;

        return $this;
    }

}
