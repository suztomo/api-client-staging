<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud Dataproc workflow template resource.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.WorkflowMetadata</code>
 */
class WorkflowMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The "resource name" of the template.
     *
     * Generated from protobuf field <code>string template = 1;</code>
     */
    private $template = '';
    /**
     * Output only. The version of template at the time of
     * workflow instantiation.
     *
     * Generated from protobuf field <code>int32 version = 2;</code>
     */
    private $version = 0;
    /**
     * Output only. The create cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation create_cluster = 3;</code>
     */
    private $create_cluster = null;
    /**
     * Output only. The workflow graph.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowGraph graph = 4;</code>
     */
    private $graph = null;
    /**
     * Output only. The delete cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation delete_cluster = 5;</code>
     */
    private $delete_cluster = null;
    /**
     * Output only. The workflow state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowMetadata.State state = 6;</code>
     */
    private $state = 0;
    /**
     * Output only. The name of the managed cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 7;</code>
     */
    private $cluster_name = '';
    /**
     * Map from parameter names to values that were used for those parameters.
     *
     * Generated from protobuf field <code>map<string, string> parameters = 8;</code>
     */
    private $parameters;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\WorkflowTemplates::initOnce();
        parent::__construct();
    }

    /**
     * Output only. The "resource name" of the template.
     *
     * Generated from protobuf field <code>string template = 1;</code>
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Output only. The "resource name" of the template.
     *
     * Generated from protobuf field <code>string template = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->template = $var;

        return $this;
    }

    /**
     * Output only. The version of template at the time of
     * workflow instantiation.
     *
     * Generated from protobuf field <code>int32 version = 2;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Output only. The version of template at the time of
     * workflow instantiation.
     *
     * Generated from protobuf field <code>int32 version = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Output only. The create cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation create_cluster = 3;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\ClusterOperation
     */
    public function getCreateCluster()
    {
        return $this->create_cluster;
    }

    /**
     * Output only. The create cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation create_cluster = 3;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\ClusterOperation $var
     * @return $this
     */
    public function setCreateCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\ClusterOperation::class);
        $this->create_cluster = $var;

        return $this;
    }

    /**
     * Output only. The workflow graph.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowGraph graph = 4;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\WorkflowGraph
     */
    public function getGraph()
    {
        return $this->graph;
    }

    /**
     * Output only. The workflow graph.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowGraph graph = 4;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\WorkflowGraph $var
     * @return $this
     */
    public function setGraph($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\WorkflowGraph::class);
        $this->graph = $var;

        return $this;
    }

    /**
     * Output only. The delete cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation delete_cluster = 5;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\ClusterOperation
     */
    public function getDeleteCluster()
    {
        return $this->delete_cluster;
    }

    /**
     * Output only. The delete cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation delete_cluster = 5;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\ClusterOperation $var
     * @return $this
     */
    public function setDeleteCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\ClusterOperation::class);
        $this->delete_cluster = $var;

        return $this;
    }

    /**
     * Output only. The workflow state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowMetadata.State state = 6;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The workflow state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowMetadata.State state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1beta2\WorkflowMetadata_State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The name of the managed cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 7;</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * Output only. The name of the managed cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * Map from parameter names to values that were used for those parameters.
     *
     * Generated from protobuf field <code>map<string, string> parameters = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Map from parameter names to values that were used for those parameters.
     *
     * Generated from protobuf field <code>map<string, string> parameters = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->parameters = $arr;

        return $this;
    }

}

