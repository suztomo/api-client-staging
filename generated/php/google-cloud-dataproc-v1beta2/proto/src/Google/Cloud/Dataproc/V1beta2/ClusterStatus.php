<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The status of a cluster and its instances.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.ClusterStatus</code>
 */
class ClusterStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The cluster's state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterStatus.State state = 1;</code>
     */
    private $state = 0;
    /**
     * Output only. Optional details of cluster's state.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     */
    private $detail = '';
    /**
     * Output only. Time when this state was entered.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_start_time = 3;</code>
     */
    private $state_start_time = null;
    /**
     * Output only. Additional state information that includes
     * status reported by the agent.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterStatus.Substate substate = 4;</code>
     */
    private $substate = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct();
    }

    /**
     * Output only. The cluster's state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterStatus.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The cluster's state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterStatus.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1beta2\ClusterStatus_State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Optional details of cluster's state.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Output only. Optional details of cluster's state.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->detail = $var;

        return $this;
    }

    /**
     * Output only. Time when this state was entered.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_start_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStateStartTime()
    {
        return $this->state_start_time;
    }

    /**
     * Output only. Time when this state was entered.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_start_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStateStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->state_start_time = $var;

        return $this;
    }

    /**
     * Output only. Additional state information that includes
     * status reported by the agent.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterStatus.Substate substate = 4;</code>
     * @return int
     */
    public function getSubstate()
    {
        return $this->substate;
    }

    /**
     * Output only. Additional state information that includes
     * status reported by the agent.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterStatus.Substate substate = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSubstate($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1beta2\ClusterStatus_Substate::class);
        $this->substate = $var;

        return $this;
    }

}

