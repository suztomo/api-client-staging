<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for beginning a new transaction.
 * Transactions can be created explicitly with calls to
 * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction] or implicitly by setting
 * [ReadOptions.new_transaction][google.datastore.v1.ReadOptions.new_transaction] in read requests.
 *
 * Generated from protobuf message <code>google.datastore.v1.TransactionOptions</code>
 */
class TransactionOptions extends \Google\Protobuf\Internal\Message
{
    protected $mode;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * The transaction should allow both reads and writes.
     *
     * Generated from protobuf field <code>.google.datastore.v1.TransactionOptions.ReadWrite read_write = 1;</code>
     * @return \Google\Cloud\Datastore\V1\TransactionOptions_ReadWrite
     */
    public function getReadWrite()
    {
        return $this->readOneof(1);
    }

    /**
     * The transaction should allow both reads and writes.
     *
     * Generated from protobuf field <code>.google.datastore.v1.TransactionOptions.ReadWrite read_write = 1;</code>
     * @param \Google\Cloud\Datastore\V1\TransactionOptions_ReadWrite $var
     * @return $this
     */
    public function setReadWrite($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\TransactionOptions_ReadWrite::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The transaction should only allow reads.
     *
     * Generated from protobuf field <code>.google.datastore.v1.TransactionOptions.ReadOnly read_only = 2;</code>
     * @return \Google\Cloud\Datastore\V1\TransactionOptions_ReadOnly
     */
    public function getReadOnly()
    {
        return $this->readOneof(2);
    }

    /**
     * The transaction should only allow reads.
     *
     * Generated from protobuf field <code>.google.datastore.v1.TransactionOptions.ReadOnly read_only = 2;</code>
     * @param \Google\Cloud\Datastore\V1\TransactionOptions_ReadOnly $var
     * @return $this
     */
    public function setReadOnly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\TransactionOptions_ReadOnly::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->whichOneof("mode");
    }

}

