<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.PutResponse</code>
 */
class PutResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    private $header = null;
    /**
     * if prev_kv is set in the request, the previous key-value pair will be returned.
     *
     * Generated from protobuf field <code>.mvccpb.KeyValue prev_kv = 2;</code>
     */
    private $prev_kv = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Etcdserverpb\ResponseHeader $header
     *     @type \Mvccpb\KeyValue $prev_kv
     *           if prev_kv is set in the request, the previous key-value pair will be returned.
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
     * if prev_kv is set in the request, the previous key-value pair will be returned.
     *
     * Generated from protobuf field <code>.mvccpb.KeyValue prev_kv = 2;</code>
     * @return \Mvccpb\KeyValue
     */
    public function getPrevKv()
    {
        return $this->prev_kv;
    }

    /**
     * if prev_kv is set in the request, the previous key-value pair will be returned.
     *
     * Generated from protobuf field <code>.mvccpb.KeyValue prev_kv = 2;</code>
     * @param \Mvccpb\KeyValue $var
     * @return $this
     */
    public function setPrevKv($var)
    {
        GPBUtil::checkMessage($var, \Mvccpb\KeyValue::class);
        $this->prev_kv = $var;

        return $this;
    }

}

