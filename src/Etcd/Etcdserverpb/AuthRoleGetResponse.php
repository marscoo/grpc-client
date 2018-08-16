<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.AuthRoleGetResponse</code>
 */
class AuthRoleGetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    private $header = null;
    /**
     * Generated from protobuf field <code>repeated .authpb.Permission perm = 2;</code>
     */
    private $perm;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Etcdserverpb\ResponseHeader $header
     *     @type \Authpb\Permission[]|\Google\Protobuf\Internal\RepeatedField $perm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.ResponseHeader header = 1;</code>
     * @return \Etcdserverpb\ResponseHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.ResponseHeader header = 1;</code>
     * @param \Etcdserverpb\ResponseHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\ResponseHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .authpb.Permission perm = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPerm()
    {
        return $this->perm;
    }

    /**
     * Generated from protobuf field <code>repeated .authpb.Permission perm = 2;</code>
     * @param \Authpb\Permission[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPerm($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authpb\Permission::class);
        $this->perm = $arr;

        return $this;
    }

}
