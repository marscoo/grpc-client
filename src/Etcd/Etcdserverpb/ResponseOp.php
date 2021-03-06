<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.ResponseOp</code>
 */
class ResponseOp extends \Google\Protobuf\Internal\Message
{
    protected $response;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Etcdserverpb\RangeResponse $response_range
     *     @type \Etcdserverpb\PutResponse $response_put
     *     @type \Etcdserverpb\DeleteRangeResponse $response_delete_range
     *     @type \Etcdserverpb\TxnResponse $response_txn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.RangeResponse response_range = 1;</code>
     * @return \Etcdserverpb\RangeResponse
     */
    public function getResponseRange()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.RangeResponse response_range = 1;</code>
     * @param \Etcdserverpb\RangeResponse $var
     * @return $this
     */
    public function setResponseRange($var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\RangeResponse::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.PutResponse response_put = 2;</code>
     * @return \Etcdserverpb\PutResponse
     */
    public function getResponsePut()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.PutResponse response_put = 2;</code>
     * @param \Etcdserverpb\PutResponse $var
     * @return $this
     */
    public function setResponsePut($var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\PutResponse::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.DeleteRangeResponse response_delete_range = 3;</code>
     * @return \Etcdserverpb\DeleteRangeResponse
     */
    public function getResponseDeleteRange()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.DeleteRangeResponse response_delete_range = 3;</code>
     * @param \Etcdserverpb\DeleteRangeResponse $var
     * @return $this
     */
    public function setResponseDeleteRange($var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\DeleteRangeResponse::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.TxnResponse response_txn = 4;</code>
     * @return \Etcdserverpb\TxnResponse
     */
    public function getResponseTxn()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.etcdserverpb.TxnResponse response_txn = 4;</code>
     * @param \Etcdserverpb\TxnResponse $var
     * @return $this
     */
    public function setResponseTxn($var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\TxnResponse::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->whichOneof("response");
    }

}

