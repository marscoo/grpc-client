<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.Member</code>
 */
class Member extends \Google\Protobuf\Internal\Message
{
    /**
     * ID is the member ID for this member.
     *
     * Generated from protobuf field <code>uint64 ID = 1;</code>
     */
    private $ID = 0;
    /**
     * name is the human-readable name of the member. If the member is not started, the name will be an empty string.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * peerURLs is the list of URLs the member exposes to the cluster for communication.
     *
     * Generated from protobuf field <code>repeated string peerURLs = 3;</code>
     */
    private $peerURLs;
    /**
     * clientURLs is the list of URLs the member exposes to clients for communication. If the member is not started, clientURLs will be empty.
     *
     * Generated from protobuf field <code>repeated string clientURLs = 4;</code>
     */
    private $clientURLs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $ID
     *           ID is the member ID for this member.
     *     @type string $name
     *           name is the human-readable name of the member. If the member is not started, the name will be an empty string.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $peerURLs
     *           peerURLs is the list of URLs the member exposes to the cluster for communication.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $clientURLs
     *           clientURLs is the list of URLs the member exposes to clients for communication. If the member is not started, clientURLs will be empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * ID is the member ID for this member.
     *
     * Generated from protobuf field <code>uint64 ID = 1;</code>
     * @return int|string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * ID is the member ID for this member.
     *
     * Generated from protobuf field <code>uint64 ID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setID($var)
    {
        GPBUtil::checkUint64($var);
        $this->ID = $var;

        return $this;
    }

    /**
     * name is the human-readable name of the member. If the member is not started, the name will be an empty string.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name is the human-readable name of the member. If the member is not started, the name will be an empty string.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * peerURLs is the list of URLs the member exposes to the cluster for communication.
     *
     * Generated from protobuf field <code>repeated string peerURLs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeerURLs()
    {
        return $this->peerURLs;
    }

    /**
     * peerURLs is the list of URLs the member exposes to the cluster for communication.
     *
     * Generated from protobuf field <code>repeated string peerURLs = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeerURLs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->peerURLs = $arr;

        return $this;
    }

    /**
     * clientURLs is the list of URLs the member exposes to clients for communication. If the member is not started, clientURLs will be empty.
     *
     * Generated from protobuf field <code>repeated string clientURLs = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClientURLs()
    {
        return $this->clientURLs;
    }

    /**
     * clientURLs is the list of URLs the member exposes to clients for communication. If the member is not started, clientURLs will be empty.
     *
     * Generated from protobuf field <code>repeated string clientURLs = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClientURLs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->clientURLs = $arr;

        return $this;
    }

}
